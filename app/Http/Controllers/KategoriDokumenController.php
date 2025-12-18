<?php

namespace App\Http\Controllers;

use App\Models\KategoriDokumen;
use Illuminate\Http\Request;

class KategoriDokumenController extends Controller
{
    public function index()
    {
        $kategori = KategoriDokumen::latest()->get();
        return view('kategori_dokumen.index', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255'
        ]);

        KategoriDokumen::create([
            'nama_kategori' => $request->nama_kategori
        ]);

        return back()->with('success', 'Kategori berhasil ditambahkan');
    }

    public function destroy($id)
    {
        KategoriDokumen::findOrFail($id)->delete();
        return back()->with('success', 'Kategori berhasil dihapus');
    }
}
