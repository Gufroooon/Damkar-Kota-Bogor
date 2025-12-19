<?php

namespace App\Http\Controllers;

use App\Models\Galerivideo;
use Illuminate\Http\Request;

class GaleriVideoController extends Controller
{
    /* =======================
     |  PUBLIC
     ======================= */
    public function publicIndex()
    {
         $videos = Galerivideo::orderBy('tanggal', 'desc')->paginate(8);
        return view('galeri.galerivideo', compact('videos'));
    }

    /* =======================
     |  ADMIN
     ======================= */

    // INDEX
    public function index()
    {
         $videos = Galerivideo::orderBy('tanggal', 'desc')->get();
        return view('admin.galerivideo.index', compact('videos'));
    }

    // CREATE
    public function create()
    {
        return view('admin.galerivideo.create');
    }

    // STORE
    public function store(Request $request)
    {
        $request->validate([
    'judul' => 'required|string|max:255',
    'url_video' => 'required|url',
    'tanggal' => 'required|date',
]);


       Galerivideo::create([
    'judul' => $request->judul,
    'url_video' => $this->convertToEmbed($request->url_video),
    'tanggal' => $request->tanggal,
]);


        return redirect()
            ->route('admin.galerivideo.index')
            ->with('success', 'Video berhasil ditambahkan');
    }

    // 🔥 EDIT (INI YANG HILANG)
    public function edit($id)
    {
        $video = Galerivideo::findOrFail($id);
        return view('admin.galerivideo.edit', compact('video'));
    }

    // 🔥 UPDATE (INI JUGA WAJIB)
    public function update(Request $request, $id)
    {
        $request->validate([
    'judul' => 'required|string|max:255',
    'url_video' => 'required|url',
    'tanggal' => 'required|date',
]);


        $video = Galerivideo::findOrFail($id);

        $video->update([
    'judul' => $request->judul,
    'url_video' => $this->convertToEmbed($request->url_video),
        'tanggal' => $request->tanggal,
]);


        return redirect()
            ->route('admin.galerivideo.index')
            ->with('success', 'Video berhasil diperbarui');
    }

    // DELETE
    public function destroy($id)
    {
        Galerivideo::findOrFail($id)->delete();
        return back()->with('success', 'Video berhasil dihapus');
    }

    private function convertToEmbed($url)
{
    if (str_contains($url, 'youtube.com/watch')) {
        parse_str(parse_url($url, PHP_URL_QUERY), $vars);
        return 'https://www.youtube.com/embed/' . $vars['v'];
    }

    if (str_contains($url, 'youtu.be')) {
        $id = basename($url);
        return 'https://www.youtube.com/embed/' . $id;
    }

    return $url;
}

}
