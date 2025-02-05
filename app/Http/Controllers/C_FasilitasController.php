<?php

namespace App\Http\Controllers;

use App\Models\M_Fasilitas;
use Illuminate\Http\Request;

class C_FasilitasController extends Controller
{
    public function index()
    {
        $categories = [
            'gml_1',
            'bdg_2',
            'psg_3',
            'jbk_4',
            'polymer_ckr',
            'polymer_bdg',
            'metal_ckr'
        ];

        $fasilitas = [];
        $totals = [];

        foreach ($categories as $category) {
            $items = M_Fasilitas::where('kategori_fasilitas', $category)->get();
            $fasilitas[$category] = $items;
            $totals[$category] = $items->sum('qty_item'); // Total qty per kategori
        }

        return view('fasilitas', compact('fasilitas', 'totals'));
    }

}
