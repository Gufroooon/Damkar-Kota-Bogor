<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GaleriVideoController;
use App\Http\Controllers\KategoriDokumenController;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Galerivideo;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| PUBLIC PAGE
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    $berita = Berita::latest()->take(3)->get();

   $galeriFoto = Galeri::with('images')
        ->latest()
        ->take(2)
        ->get();

    // 2 VIDEO TERBARU
    $galeriVideo = Galerivideo::latest()
        ->take(2)
        ->get();

          $berita = Berita::latest()
        ->take(3)
        ->get();

    return view('homepage', compact(
        'galeriFoto',
        'galeriVideo',
        'berita'
    ));
})->name('homepage');



/* BERITA */
Route::get('/berita', [BeritaController::class, 'publicIndex'])
    ->name('public.berita.index');

Route::get('/berita/{id}', [BeritaController::class, 'publicShow'])
    ->name('public.berita.show');


/* DOKUMEN */
Route::get('/dokumen', [DokumenController::class, 'publicIndex'])
    ->name('public.dokumen.index');    

/* kontak */
Route::view('/kontak', 'kontak')->name('kontak');
  


/*
|--------------------------------------------------------------------------
| PROFIL (PUBLIC)
|--------------------------------------------------------------------------
*/
Route::prefix('profil')->group(function () {
    Route::view('/kepala-dinas', 'profil.kepaladinas')->name('profil.kepaladinas');
    Route::view('/sejarah', 'profil.sejarah')->name('profil.sejarah');
    Route::view('/visi-misi', 'profil.visimisi')->name('profil.visimisi');
    Route::view('/struktur', 'profil.struktur')->name('profil.struktur');
        Route::view('/tupoksi', 'profil.tupoksi')->name('profil.tupoksi');
});

/*
|--------------------------------------------------------------------------
| GALERI (PUBLIC)
|--------------------------------------------------------------------------
*/
Route::prefix('galeri')->group(function () {

    // galeri foto
    Route::get('/foto', [GaleriController::class, 'publicIndex'])
        ->name('public.galeri.foto');

    // galeri video
    Route::get('/video', [GaleriVideoController::class, 'publicIndex'])
        ->name('public.galeri.video');

});


/*
|--------------------------------------------------------------------------
| PENGADUAN (PUBLIC)
|--------------------------------------------------------------------------
*/
Route::prefix('pengaduan')->group(function () {
    Route::view('/sibadra', 'pengaduan.sibadra')->name('pengaduan.kepaladinas');
    Route::view('/sp4nlapor', 'pengaduan.sp4nlapor')->name('pengaduan.sp4nlapor');

});
/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/
require __DIR__ . '/auth.php';

/*
|--------------------------------------------------------------------------
| ADMIN AREA
|--------------------------------------------------------------------------
*/
Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        /* DASHBOARD */
        Route::get('/dashboard', [BeritaController::class, 'adminIndex'])
            ->name('dashboard');

        /* BERITA */
        Route::get('/berita', [BeritaController::class, 'adminIndex'])
            ->name('berita.index');

        Route::get('/berita/create', [BeritaController::class, 'create'])
            ->name('berita.create');

        Route::post('/berita', [BeritaController::class, 'store'])
            ->name('berita.store');

        Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])
            ->name('berita.edit');

        Route::put('/berita/{id}', [BeritaController::class, 'update'])
            ->name('berita.update');

        Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])
            ->name('berita.destroy');

        /* GALERI */
        Route::get('/galeri', [GaleriController::class, 'adminIndex'])
            ->name('galeri.index');

        Route::get('/galeri/create', [GaleriController::class, 'create'])
            ->name('galeri.create');

        Route::post('/galeri', [GaleriController::class, 'store'])
            ->name('galeri.store');

        Route::get('/galeri/{id}/edit', [GaleriController::class, 'edit'])
            ->name('galeri.edit');

        Route::put('/galeri/{id}', [GaleriController::class, 'update'])
            ->name('galeri.update');

        Route::delete('/galeri/{id}', [GaleriController::class, 'destroy'])
            ->name('galeri.destroy');

            /* GALERI VIDEO */
Route::get('/galerivideo', [GaleriVideoController::class, 'index'])
    ->name('galerivideo.index');
Route::get('/galerivideo/create', [GaleriVideoController::class, 'create'])
    ->name('galerivideo.create');

Route::post('/galerivideo', [GaleriVideoController::class, 'store'])
    ->name('galerivideo.store');

Route::get('/galerivideo/{id}/edit', [GaleriVideoController::class, 'edit'])
    ->name('galerivideo.edit');

Route::put('/galerivideo/{id}', [GaleriVideoController::class, 'update'])
    ->name('galerivideo.update');

Route::delete('/galerivideo/{id}', [GaleriVideoController::class, 'destroy'])
    ->name('galerivideo.destroy');


        /* KATEGORI DOKUMEN */
        Route::get('/kategori-dokumen', [KategoriDokumenController::class, 'index'])
            ->name('kategori.index');

        Route::post('/kategori-dokumen', [KategoriDokumenController::class, 'store'])
            ->name('kategori.store');

        Route::delete('/kategori-dokumen/{id}', [KategoriDokumenController::class, 'destroy'])
            ->name('kategori.destroy');

        Route::get('/dokumen', [DokumenController::class, 'index'])
            ->name('dokumen.index');

        Route::get('/dokumen/create', [DokumenController::class, 'create'])
            ->name('dokumen.create');

        Route::post('/dokumen', [DokumenController::class, 'store'])
            ->name('dokumen.store');

        Route::get('/dokumen/{id}/edit', [DokumenController::class, 'edit'])
            ->name('dokumen.edit');

        Route::put('/dokumen/{id}', [DokumenController::class, 'update'])
            ->name('dokumen.update');

        Route::delete('/dokumen/{id}', [DokumenController::class, 'destroy'])
            ->name('dokumen.destroy');
});
