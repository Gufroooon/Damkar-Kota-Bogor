@extends('layouts.app')

@section('title', 'Edit Galeri Video')

@section('content')
<div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-8 mt-10">

    <h1 class="text-3xl font-bold mb-6">
        Edit Galeri Video
    </h1>

    <form action="{{ route('admin.galerivideo.update', $video->id) }}"
          method="POST">
        @csrf
        @method('PUT')

        {{-- JUDUL --}}
        <div class="mb-6">
            <label class="block font-semibold mb-2">
                Judul Video
            </label>

            <input type="text"
                   name="judul"
                   value="{{ old('judul', $video->judul) }}"
                   required
                   class="w-full px-4 py-3 border rounded-lg
                          focus:ring-2 focus:ring-red-400">
        </div>

        {{-- URL VIDEO --}}
        <div class="mb-6">
            <label class="block font-semibold mb-2">
                URL Video (YouTube / dll)
            </label>

            <input type="url"
                   name="url_video"
                   value="{{ old('url_video', $video->url_video) }}"
                   required
                   class="w-full px-4 py-3 border rounded-lg
                          focus:ring-2 focus:ring-red-400"
                   placeholder="https://www.youtube.com/watch?v=xxxx">

            <p class="text-sm text-gray-500 mt-2">
                Contoh: https://www.youtube.com/watch?v=xxxx
            </p>
        </div>

        {{-- PREVIEW VIDEO --}}
        <div class="mb-6">
            <label class="block font-semibold mb-2">
                Preview Video
            </label>

            <div class="aspect-video rounded-lg overflow-hidden border">
               <iframe
    class="w-full h-80 rounded-lg"
    src="{{ $video->url_video }}"
    frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen>
</iframe>

            </div>
        </div>

        {{-- TANGGAL --}}
<div class="mb-6">
    <label class="block font-semibold mb-2">
        Tanggal
    </label>

    <input type="date"
       name="tanggal"
       value="{{ old('tanggal', $video->tanggal->format('Y-m-d')) }}"
       required
       class="w-full px-4 py-3 border rounded-lg
              focus:ring-2 focus:ring-red-400">
</div>


        {{-- TOMBOL --}}
        <div class="flex justify-end space-x-3">
            <a href="{{ route('admin.galerivideo.index') }}"
               class="px-5 py-2 bg-gray-300 rounded-lg hover:bg-gray-400">
                Batal
            </a>

            <button type="submit"
                    class="px-6 py-2 bg-red-600 text-white rounded-lg
                           hover:bg-red-700">
                Simpan Perubahan
            </button>
        </div>

    </form>
</div>
@endsection
