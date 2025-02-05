<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Produk;

class C_ProdukController extends Controller
{
    public function index(Request $request)
    {
        // Ambil filter dari request
        $jenis_produk = $request->get('jenis_produk', 'kendaraan_roda_2'); // Default: 'kendaraan_roda_2'
        $kategori_produk = $request->get('kategori_produk', 'semua'); // Default: 'semua'

        // Query produk berdasarkan filter
        $query = M_Produk::query();

        if ($jenis_produk !== 'semua') {
            $query->where('jenis_produk', $jenis_produk);
        }

        if ($kategori_produk !== 'semua') {
            $query->where('kategori_produk', $kategori_produk);
        }

        $produk = $query->get();

        // Data enum untuk dropdown dan tab
        $jenis_produk_enum = ['kendaraan_roda_2', 'kendaraan_roda_4', 'non_otomotif']; // Update enum
        $kategori_produk_enum = ['semua', 'metal', 'plastik', 'non_otomotif'];

        return view('produk', [
            'produk' => $produk,
            'jenis_produk_enum' => $jenis_produk_enum,
            'kategori_produk_enum' => $kategori_produk_enum,
            'selected_jenis' => $jenis_produk,
            'selected_kategori' => $kategori_produk,
        ]);
    }
}
