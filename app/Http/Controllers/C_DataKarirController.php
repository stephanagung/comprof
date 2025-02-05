<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_InfoLoker;
use App\Models\M_InfoTingkatPendidikan;
use App\Models\M_InfoDeskripsiPekerjaan;
use App\Models\M_InfoDokumenPersyaratan;
use Carbon\Carbon;


class C_DataKarirController extends Controller
{
    public function index()
    {
        // Ambil semua data loker beserta relasinya
        $dataLoker = M_InfoLoker::with(['tingkatPendidikan', 'deskripsiPekerjaan', 'dokumenPersyaratan'])->get();

        // Ambil tanggal hari ini
        $today = Carbon::today();

        // **Card 1: Total Loker**
        $totalLoker = M_InfoLoker::count(); // Total semua loker
        $lokerHariIni = M_InfoLoker::whereDate('created_at', $today)->count(); // Loker yang dibuat hari ini

        // **Card 2: Status Loker**
        $lokerBuka = M_InfoLoker::where('periode_lamar_berakhir', '>=', $today)->count(); // Loker masih buka
        $lokerTutup = M_InfoLoker::where('periode_lamar_berakhir', '<', $today)->count(); // Loker sudah tutup

        // **Card 3: Lokasi Loker**
        $totalLokasi = M_InfoLoker::whereNotNull('lokasi_penempatan')->count(); // Total lokasi loker
        $lokerCikarang = M_InfoLoker::where('lokasi_penempatan', 'Cikarang')->count(); // Loker di Cikarang
        $lokerBandung = M_InfoLoker::where('lokasi_penempatan', 'Bandung')->count(); // Loker di Bandung

        // Kirim data ke view
        return view('form_karir', compact(
            'dataLoker',
            'totalLoker',
            'lokerHariIni',
            'lokerBuka',
            'lokerTutup',
            'totalLokasi',
            'lokerCikarang',
            'lokerBandung'
        ));
    }

    public function store(Request $request)
    {
        // Validasi data input
        $validated = $request->validate([
            'nama_perusahaan' => 'required|string|max:255',
            'posisi_pekerjaan' => 'required|string|max:255',
            'departemen' => 'required|string',
            'lokasi_penempatan' => 'required|string',
            'durasi_kerja' => 'required|string',
            'periode_lamar_berakhir' => 'required|date',
            'jenis_pekerjaan' => 'required|string',
            'metode_kerja' => 'required|string',
        ]);


        // Simpan data ke tabel info_loker
        M_InfoLoker::create($validated);

        // Redirect kembali ke halaman form dengan pesan sukses
        return redirect()->route('form_karir')->with('success', 'Lowongan kerja berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $loker = M_InfoLoker::findOrFail($id);
        return response()->json($loker);
    }

    public function update(Request $request)
    {
        $request->validate([
            'id_info_loker' => 'required|integer|exists:info_loker,id_info_loker',
            'nama_perusahaan' => 'required|string|max:255',
            'posisi_pekerjaan' => 'required|string|max:255',
            'departemen' => 'required|string|max:255',
            'lokasi_penempatan' => 'required|string|max:255',
            'durasi_kerja' => 'required|string|max:255',
            'periode_lamar_berakhir' => 'required|date',
            'jenis_pekerjaan' => 'required|string|max:255',
            'metode_kerja' => 'required|string|max:255',
        ]);

        $loker = M_InfoLoker::findOrFail($request->id_info_loker);
        $loker->update($request->all());

        return redirect()->route('form_karir')->with('success', 'Lowongan kerja berhasil diperbarui.');
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'id_info_loker' => 'required|integer|exists:info_loker,id_info_loker',
        ]);

        $loker = M_InfoLoker::findOrFail($request->id_info_loker);
        $loker->delete();

        return redirect()->route('form_karir')->with('success', 'Lowongan kerja berhasil dihapus.');
    }

    public function detail($id)
    {
        // Ambil data loker beserta relasinya berdasarkan ID
        $loker = M_InfoLoker::with(['tingkatPendidikan', 'deskripsiPekerjaan', 'dokumenPersyaratan'])->findOrFail($id);

        // Kirim data ke view
        return view('detail_form_karir', compact('loker'));
    }

    public function storeTingkatPendidikan(Request $request)
    {
        $request->validate([
            'id_info_loker' => 'required|exists:info_loker,id_info_loker',
            'nama_tingkat_pendidikan' => 'required|string|max:255',
        ]);

        M_InfoTingkatPendidikan::create($request->all());

        return redirect()->back()->with('success', 'Tingkat pendidikan berhasil ditambahkan.');
    }

    public function updateTingkatPendidikan(Request $request)
    {
        $request->validate([
            'id_info_tingkat_pendidikan' => 'required|exists:info_tingkat_pendidikan,id_info_tingkat_pendidikan',
            'nama_tingkat_pendidikan' => 'required|string|max:255',
        ]);

        $tingkatPendidikan = M_InfoTingkatPendidikan::findOrFail($request->id_info_tingkat_pendidikan);
        $tingkatPendidikan->update(['nama_tingkat_pendidikan' => $request->nama_tingkat_pendidikan]);

        return redirect()->back()->with('success', 'Tingkat pendidikan berhasil diperbarui.');
    }

    public function destroyTingkatPendidikan(Request $request)
    {
        $request->validate([
            'id_info_tingkat_pendidikan' => 'required|exists:info_tingkat_pendidikan,id_info_tingkat_pendidikan',
        ]);

        $tingkatPendidikan = M_InfoTingkatPendidikan::findOrFail($request->id_info_tingkat_pendidikan);
        $tingkatPendidikan->delete();

        return redirect()->back()->with('success', 'Tingkat pendidikan berhasil dihapus.');
    }

    public function storeDeskripsiPekerjaan(Request $request)
    {
        $request->validate([
            'id_info_loker' => 'required|exists:info_loker,id_info_loker',
            'deskripsi_pekerjaan' => 'required|string|max:255',
        ]);

        M_InfoDeskripsiPekerjaan::create($request->all());

        return redirect()->back()->with('success', 'Deskripsi pekerjaan berhasil ditambahkan.');
    }

    public function updateDeskripsiPekerjaan(Request $request)
    {
        $request->validate([
            'id_info_deskripsi_pekerjaan' => 'required|exists:info_deskripsi_pekerjaan,id_info_deskripsi_pekerjaan',
            'deskripsi_pekerjaan' => 'required|string|max:255',
        ]);

        // Cari data berdasarkan ID dan update
        $deskripsiPekerjaan = M_InfoDeskripsiPekerjaan::findOrFail($request->id_info_deskripsi_pekerjaan);
        $deskripsiPekerjaan->update([
            'deskripsi_pekerjaan' => $request->deskripsi_pekerjaan,
        ]);

        return redirect()->back()->with('success', 'Deskripsi pekerjaan berhasil diperbarui.');
    }

    public function destroyDeskripsiPekerjaan(Request $request)
    {
        $request->validate([
            'id_info_deskripsi_pekerjaan' => 'required|exists:info_deskripsi_pekerjaan,id_info_deskripsi_pekerjaan',
        ]);

        // Cari data berdasarkan ID dan hapus
        $deskripsiPekerjaan = M_InfoDeskripsiPekerjaan::findOrFail($request->id_info_deskripsi_pekerjaan);
        $deskripsiPekerjaan->delete();

        return redirect()->back()->with('success', 'Deskripsi pekerjaan berhasil dihapus.');
    }

    public function storeDokumenPersyaratan(Request $request)
    {
        $request->validate([
            'id_info_loker' => 'required|exists:info_loker,id_info_loker',
            'dokumen_persyaratan' => 'required|string|max:255',
        ]);

        M_InfoDokumenPersyaratan::create($request->all());

        return redirect()->back()->with('success', 'Dokumen persyaratan berhasil ditambahkan.');
    }

    public function updateDokumenPersyaratan(Request $request)
    {
        $request->validate([
            'id_info_dokumen_persyaratan' => 'required|exists:info_dokumen_persyaratan,id_info_dokumen_persyaratan',
            'dokumen_persyaratan' => 'required|string|max:255',
        ]);

        // Cari data berdasarkan ID dan update
        $dokumenPersyaratan = M_InfoDokumenPersyaratan::findOrFail($request->id_info_dokumen_persyaratan);
        $dokumenPersyaratan->update([
            'dokumen_persyaratan' => $request->dokumen_persyaratan,
        ]);

        return redirect()->back()->with('success', 'Dokumen persyaratan berhasil diperbarui.');
    }

    public function destroyDokumenPersyaratan(Request $request)
    {
        $request->validate([
            'id_info_dokumen_persyaratan' => 'required|exists:info_dokumen_persyaratan,id_info_dokumen_persyaratan',
        ]);

        // Cari data berdasarkan ID dan hapus
        $dokumenPersyaratan = M_InfoDokumenPersyaratan::findOrFail($request->id_info_dokumen_persyaratan);
        $dokumenPersyaratan->delete();

        return redirect()->back()->with('success', 'Dokumen persyaratan berhasil dihapus.');
    }

}