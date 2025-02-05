<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Produk;

class C_DataProdukController extends Controller
{
    public function index()
    {
        $produk = M_Produk::all(); // Ambil semua data produk
        return view('form_produk', compact('produk'));
    }

    public function previewFotoByNama($nama_produk)
    {
        // Cari produk berdasarkan nama_produk
        $produk = M_Produk::where('nama_produk', $nama_produk)->firstOrFail();

        // Path ke file berdasarkan data dari database
        $filePath = storage_path('app/public/' . $produk->foto_produk);

        // Cek apakah file ada
        if (!file_exists($filePath)) {
            abort(404, 'Foto tidak ditemukan.');
        }

        return response()->file($filePath); // Menampilkan file untuk dipreview
    }

    public function downloadFotoByNama($nama_produk)
    {
        // Cari produk berdasarkan nama_produk
        $produk = M_Produk::where('nama_produk', $nama_produk)->firstOrFail();

        // Path ke file berdasarkan data dari database
        $filePath = storage_path('app/public/' . $produk->foto_produk);

        // Cek apakah file ada
        if (!file_exists($filePath)) {
            abort(404, 'Foto tidak ditemukan.');
        }

        return response()->download($filePath); // Mengunduh file
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'kategori_produk' => 'required|in:metal,plastik,non_otomotif',
            'jenis_produk' => 'required|in:kendaraan_roda_2,kendaraan_roda_4,non_otomotif',
            'foto_produk' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Validasi file foto
        ]);

        try {
            // Proses Upload Foto
            $fotoPath = null;
            if ($request->hasFile('foto_produk')) {
                $file = $request->file('foto_produk');
                $fileName = str_replace(' ', '_', $request->nama_produk) . '.' . $file->getClientOriginalExtension();
                $fotoPath = $file->storeAs('public/foto_produk', $fileName);
            }

            // Simpan Data Produk
            M_Produk::create([
                'nama_produk' => $request->nama_produk,
                'kategori_produk' => $request->kategori_produk,
                'jenis_produk' => $request->jenis_produk,
                'foto_produk' => str_replace('public/', '', $fotoPath), // Hanya path relatif
                'pt_produksi' => 'PT Mada Wikri Tunggal',
            ]);

            return redirect()->back()->with('success', 'Produk berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menambahkan produk.');
        }
    }

    public function update(Request $request)
    {
        $produk = M_Produk::findOrFail($request->id_produk);
        $produk->update([
            'nama_produk' => $request->nama_produk,
            'kategori_produk' => $request->kategori_produk,
            'jenis_produk' => $request->jenis_produk,
        ]);

        return redirect()->back()->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy(Request $request)
    {
        try {
            $produk = M_Produk::findOrFail($request->id_produk);

            // Hapus file foto jika ada
            if ($produk->foto_produk) {
                $filePath = storage_path('app/public/' . $produk->foto_produk);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }

            // Hapus produk dari database
            $produk->delete();

            return redirect()->back()->with('success', 'Produk berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus produk.');
        }
    }


}
