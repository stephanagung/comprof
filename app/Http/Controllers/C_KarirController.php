<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_InfoLoker;
use App\Models\M_InfoTingkatPendidikan;
use App\Models\M_InfoDeskripsiPekerjaan;
use App\Models\M_InfoDokumenPersyaratan;

class C_KarirController extends Controller
{

    public function index(Request $request)
    {
        // Ambil data filter dari request
        $filterDepartemen = $request->input('departemen');
        $filterLokasi = $request->input('lokasi_penempatan');
        $filterJenis = $request->input('jenis_pekerjaan');
        $filterPendidikan = $request->input('jenjang_pendidikan');

        // Query Loker dengan filter
        $loker = M_InfoLoker::with(['tingkatPendidikan', 'deskripsiPekerjaan', 'dokumenPersyaratan'])
            ->when(!empty($filterDepartemen) && $filterDepartemen !== 'all', function ($query) use ($filterDepartemen) {
                return $query->where('departemen', 'LIKE', "%$filterDepartemen%");
            })
            ->when($filterLokasi && $filterLokasi != 'all', function ($query, $filterLokasi) {
                return $query->where('lokasi_penempatan', $filterLokasi);
            })
            ->when($filterJenis && $filterJenis != 'all', function ($query, $filterJenis) {
                return $query->where('jenis_pekerjaan', $filterJenis);
            })
            ->when($filterPendidikan && $filterPendidikan != 'all', function ($query, $filterPendidikan) {
                return $query->whereHas('tingkatPendidikan', function ($subQuery) use ($filterPendidikan) {
                    $subQuery->where('nama_tingkat_pendidikan', $filterPendidikan);
                });
            })
            ->get();

        // Tambahkan status lowongan (open/closed)
        $currentDate = now();
        $loker->each(function ($job) use ($currentDate) {
            $job->status_lowongan = $currentDate->gt($job->periode_lamar_berakhir) ? 'Tutup' : 'Open';
        });

        // Kirim data ke view
        return view('karir', compact('loker'));
    }



}
