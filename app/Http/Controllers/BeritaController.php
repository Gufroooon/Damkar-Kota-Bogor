<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    // =====================================================
    // PUBLIC PAGE
    // =====================================================
    public function publicIndex(Request $request)
    {
        $query = Berita::query();

        // 🔍 SEARCH JUDUL
        if ($request->filled('search')) {
            $query->where('judul', 'like', '%' . $request->search . '%');
        }

        // ⏳ FILTER SORT BERDASARKAN TANGGAL
        if ($request->filled('sort')) {
            if ($request->sort === 'terlama') {
                $query->orderBy('tanggal', 'asc');
            } else {
                $query->orderBy('tanggal', 'desc');
            }
        } else {
            // default: terbaru
            $query->orderBy('tanggal', 'desc');
        }

        $berita = $query->paginate(6)->withQueryString();

        return view('berita', compact('berita'));
    }

    public function publicShow($id)
    {
        $berita = Berita::findOrFail($id);
        return view('beritadetail', compact('berita'));
    }

    // =====================================================
    // ADMIN DASHBOARD
    // =====================================================
    public function adminIndex()
    {
        $berita = Berita::orderBy('tanggal', 'desc')->get();
        return view('admin.dashboard', compact('berita'));
    }

    // =====================================================
    // CRUD ADMIN
    // =====================================================
    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'   => 'required|string|max:255',
            'tanggal' => 'required|date',
            'isi'     => 'required|string',
            'gambar'  => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gambarPath = null;

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('berita', 'public');
        }

        Berita::create([
            'judul'   => $request->judul,
            'tanggal' => $request->tanggal,
            'isi'     => $request->isi,
            'gambar'  => $gambarPath,
        ]);

        return redirect()->route('admin.berita.index')
            ->with('success', 'Berita berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul'   => 'required|string|max:255',
            'tanggal' => 'required|date',
            'isi'     => 'required|string',
            'gambar'  => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $berita = Berita::findOrFail($id);

        // update gambar jika ada
        if ($request->hasFile('gambar')) {

            if ($berita->gambar) {
                Storage::disk('public')->delete($berita->gambar);
            }

            $berita->gambar = $request->file('gambar')->store('berita', 'public');
        }

        $berita->judul   = $request->judul;
        $berita->tanggal = $request->tanggal;
        $berita->isi     = $request->isi;
        $berita->save();

        return redirect()->route('admin.berita.index')
            ->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if ($berita->gambar) {
            Storage::disk('public')->delete($berita->gambar);
        }

        $berita->delete();

        return redirect()->route('admin.berita.index')
            ->with('success', 'Berita berhasil dihapus!');
    }
}
