<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\KategoriDokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokumenController extends Controller
{
    /* ===============================
     * ADMIN AREA
     * =============================== */

    // INDEX ADMIN
   public function index()
{
    $kategori = KategoriDokumen::orderBy('nama_kategori')->get();

    $dokumen = Dokumen::with('kategori')
        ->latest()
        ->paginate(10); // ⬅️ pagination

    return view('admin.dokumen.index', compact('kategori', 'dokumen'));
}


    // FORM CREATE
    public function create()
    {
        $kategori = KategoriDokumen::orderBy('nama_kategori')->get();
        return view('admin.dokumen.create', compact('kategori'));
    }

    // FORM EDIT
public function edit($id)
{
    $dokumen  = Dokumen::findOrFail($id);
    $kategori = KategoriDokumen::orderBy('nama_kategori')->get();

    return view('admin.dokumen.edit', compact('dokumen', 'kategori'));
}

// UPDATE DOKUMEN
public function update(Request $request, $id)
{
    $dokumen = Dokumen::findOrFail($id);

    $request->validate([
        'nama_dokumen' => 'required|string|max:255',
        'kategori_id'  => 'required|exists:kategori_dokumen,id',
        'keterangan'   => 'nullable|string',
        'file'         => 'nullable|mimes:pdf|max:5120',
    ]);

    // kalau upload file baru
    if ($request->hasFile('file')) {

        // hapus file lama
        if ($dokumen->file) {
            Storage::disk('public')->delete($dokumen->file);
        }

        // upload file baru
        $filePath = $request->file('file')->store('dokumen', 'public');
        $dokumen->file = $filePath;
    }

    // update data
    $dokumen->update([
        'nama_dokumen' => $request->nama_dokumen,
        'kategori_id'  => $request->kategori_id,
        'keterangan'   => $request->keterangan,
        'file'         => $dokumen->file, // aman walau gak ganti file
    ]);

    return redirect()
        ->route('admin.dokumen.index')
        ->with('success', 'Dokumen berhasil diperbarui');
}


    // STORE DOKUMEN
    public function store(Request $request)
    {
        $request->validate([
            'nama_dokumen' => 'required|string|max:255',
            'kategori_id'  => 'required|exists:kategori_dokumen,id',
            'keterangan'   => 'nullable|string',
            'file'         => 'required|mimes:pdf|max:5120',
        ]);

        // upload file
        $filePath = $request->file('file')->store('dokumen', 'public');

        Dokumen::create([
            'nama_dokumen' => $request->nama_dokumen,
            'keterangan'   => $request->keterangan,
            'kategori_id'  => $request->kategori_id,
            'file'         => $filePath,
        ]);

        return redirect()
            ->route('admin.dokumen.index')
            ->with('success', 'Dokumen berhasil ditambahkan');
    }

    // DELETE DOKUMEN
    public function destroy($id)
    {
        $dokumen = Dokumen::findOrFail($id);

        // hapus file
        if ($dokumen->file) {
            Storage::disk('public')->delete($dokumen->file);
        }

        $dokumen->delete();

        return back()->with('success', 'Dokumen berhasil dihapus');
    }


    /* ===============================
     * PUBLIC AREA
     * =============================== */

public function publicIndex(Request $request)
{
    $search   = $request->query('search');
    $kategori = $request->query('kategori');

    $dokumen = Dokumen::with('kategori')
        ->when($search, function ($query) use ($search) {
            $query->where('nama_dokumen', 'like', "%{$search}%")
                  ->orWhere('keterangan', 'like', "%{$search}%");
        })
        ->when($kategori, function ($query) use ($kategori) {
            $query->where('kategori_id', $kategori);
        })
        ->latest()
        ->paginate(10)
        ->withQueryString();

    // buat dropdown filter
    $kategoriList = KategoriDokumen::orderBy('nama_kategori')->get();

    return view('dokumen', compact(
        'dokumen',
        'search',
        'kategori',
        'kategoriList'
    ));
}


}
