<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\GaleriImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    // PUBLIC PAGE
    public function publicIndex()
    {
        $galeri = Galeri::orderBy('created_at', 'desc')->paginate(4);
        return view('galeri.galeri', compact('galeri'));
    }

    public function publicShow($id)
    {
        $galeri = Galeri::with('images')->findOrFail($id);
        return view('galeridetail', compact('galeri'));
    }

    // ADMIN
    public function adminIndex()
    {
        $galeri = Galeri::with('images')->latest()->get();
        return view('admin.galeri.index', compact('galeri'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    // STORE MULTIPLE IMAGES
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
             'tanggal' => 'required|date',
        ]);

        // Simpan galeri
        $galeri = Galeri::create([
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
        ]);

        // Simpan gambar
        if ($request->hasFile('gambar')) {
           foreach ($request->file('gambar') as $img) {

    $path = $img->store('galeri', 'public');

    GaleriImage::create([
        'galeri_id' => $galeri->id,
        'file_path' => 'storage/' . $path
    ]);

}

        }

        return redirect()->route('admin.galeri.index')
            ->with('success', 'Galeri berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $galeri = Galeri::with('images')->findOrFail($id);
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'gambar.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
         'tanggal' => 'required|date',
    ]);

    $galeri = Galeri::with('images')->findOrFail($id);

    // update judul
    $galeri->update(['judul' => $request->judul, 'tanggal' => $request->tanggal]);

    // JIKA ADA GAMBAR BARU -> HAPUS GAMBAR LAMA DULU
    if ($request->hasFile('gambar')) {

        // hapus semua gambar lama
        foreach ($galeri->images as $img) {
            Storage::disk('public')->delete(str_replace('storage/', '', $img->file_path));
            $img->delete();
        }

        // upload gambar baru
        foreach ($request->file('gambar') as $file) {
            $path = $file->store('galeri', 'public');

            GaleriImage::create([
                'galeri_id' => $galeri->id,
                'file_path' => 'storage/' . $path,
            ]);
        }
    }

    return redirect()->route('admin.galeri.index')
        ->with('success', 'Galeri berhasil diperbarui!');
}


    public function destroy($id)
    {
        $galeri = Galeri::with('images')->findOrFail($id);

        foreach ($galeri->images as $img) {

            // hapus file aslinya
            Storage::disk('public')->delete(
                str_replace('storage/', '', $img->file_path)
            );

            $img->delete();
        }

        $galeri->delete();

        return redirect()->route('admin.galeri.index')
            ->with('success', 'Galeri berhasil dihapus!');
    }
}
