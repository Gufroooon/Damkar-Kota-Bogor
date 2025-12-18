@extends('layouts.app')

@section('title', 'Tambah Galeri Video')

@section('content')
<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-3xl mx-auto bg-white shadow-xl rounded-xl p-8">

        <h2 class="text-3xl font-bold mb-8 text-gray-800">
            Tambah Galeri Video
        </h2>

        <form action="{{ route('admin.galerivideo.store') }}" method="POST">
            @csrf

            {{-- JUDUL --}}
            <div class="mb-6">
                <label class="font-semibold text-gray-700">Judul Video</label>
                <input type="text"
                       name="judul"
                       value="{{ old('judul') }}"
                       class="mt-2 w-full border px-4 py-3 rounded-lg
                              focus:ring-2 focus:ring-red-400"
                       placeholder="Contoh: Kegiatan Pemadaman Kebakaran"
                       required>
            </div>

            {{-- URL VIDEO --}}
            <div class="mb-6">
                <label class="font-semibold text-gray-700">URL Video (YouTube / dll)</label>
                <input type="url"
       name="url_video"
       value="{{ old('url_video') }}"
       class="mt-2 w-full border px-4 py-3 rounded-lg
              focus:ring-2 focus:ring-red-400"
       placeholder="https://www.youtube.com/watch?v=xxxx"
       required>


                <p class="text-sm text-gray-500 mt-2">
                    Contoh: https://www.youtube.com/watch?v=xxxx  
                    <br>Video akan ditampilkan otomatis di halaman galeri.
                </p>
            </div>

            {{-- TOMBOL --}}
            <div class="flex justify-between mt-8">
                <a href="{{ route('admin.galerivideo.index') }}"
                   class="px-5 py-3 bg-gray-300 text-gray-800 rounded-lg
                          shadow hover:bg-gray-400 transition">
                    Kembali
                </a>

                <button
                    class="px-6 py-3 bg-red-600 text-white rounded-lg
                           shadow hover:bg-red-700 transition">
                    Simpan Video
                </button>
            </div>
        </form>

    </div>
</div>
@endsection
