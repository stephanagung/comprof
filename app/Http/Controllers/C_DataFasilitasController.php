<?php

namespace App\Http\Controllers;
use App\Models\M_Fasilitas;

use Illuminate\Http\Request;

class C_DataFasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = M_Fasilitas::all(); // Ambil semua data fasilitas
        return view('form_fasilitas', compact('fasilitas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori_fasilitas' => 'required|string',
            'nama_item' => 'required|string|max:255',
            'qty_item' => 'required|integer',
        ]);

        M_Fasilitas::create([
            'kategori_fasilitas' => $request->kategori_fasilitas,
            'nama_item' => $request->nama_item,
            'qty_item' => $request->qty_item,
        ]);

        return redirect()->route('form_fasilitas.index')->with('success', 'Fasilitas berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $fasilitas = M_Fasilitas::findOrFail($id);
        return response()->json($fasilitas);
    }

    public function update(Request $request)
    {
        $request->validate([
            'id_fasilitas' => 'required|integer|exists:fasilitas,id_fasilitas',
            'kategori_fasilitas' => 'required|string',
            'nama_item' => 'required|string|max:255',
            'qty_item' => 'required|integer',
        ]);

        $fasilitas = M_Fasilitas::findOrFail($request->id_fasilitas);
        $fasilitas->update([
            'kategori_fasilitas' => $request->kategori_fasilitas,
            'nama_item' => $request->nama_item,
            'qty_item' => $request->qty_item,
        ]);

        return redirect()->back()->with('success', 'Fasilitas berhasil diperbarui.');
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'id_fasilitas' => 'required|integer|exists:fasilitas,id_fasilitas',
        ]);

        $fasilitas = M_Fasilitas::findOrFail($request->id_fasilitas);
        $fasilitas->delete();

        return redirect()->back()->with('success', 'Fasilitas berhasil dihapus.');
    }





}
