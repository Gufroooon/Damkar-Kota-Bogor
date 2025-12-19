@extends('layouts.app')

@section('title', 'Edit Galeri')

@section('content')
<div class="max-w-4xl mx-auto bg-white shadow-lg rounded-xl p-8 mt-10">

    <h1 class="text-3xl font-bold mb-6">Edit Galeri</h1>

    <form action="{{ route('admin.galeri.update', $galeri->id) }}" 
          method="POST" 
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <!-- JUDUL -->
        <div class="mb-5">
            <label class="block font-semibold mb-2">Judul Galeri</label>
            <input type="text" 
                name="judul" 
                value="{{ $galeri->judul }}" 
                required
                class="w-full px-4 py-2 border rounded-lg">
        </div>

        <!-- UPLOAD GAMBAR BARU -->
        <div class="mb-5">
            <label class="block font-semibold mb-2">Tambah Gambar Baru (boleh lebih dari satu)</label>
            <input type="file" 
                name="gambar[]" 
                multiple
                class="w-full px-4 py-2 border rounded-lg">
        </div>

        <!-- GAMBAR YANG SUDAH ADA -->
        <div class="mb-5">
            <label class="block font-semibold mb-2">Gambar Saat Ini:</label>

            @if($galeri->images->count() > 0)
                <div class="grid grid-cols-3 gap-4">

                    @foreach($galeri->images as $img)
                        <div class="border p-2 rounded-lg">
                            <img src="{{ asset($img->file_path) }}" 
                                 class="w-full h-24 object-cover rounded">
                        </div>
                    @endforeach

                </div>
            @else
                <p class="text-gray-500 text-sm">Belum ada gambar.</p>
            @endif
        </div>

                {{-- TANGGAL --}}
<div class="mb-6">
    <label class="block font-semibold mb-2">
        Tanggal
    </label>

    <input type="date"
           name="tanggal"
           value="{{ old('tanggal', $galeri->tanggal->format('Y-m-d')) }}"
           required
           class="w-full px-4 py-3 border rounded-lg
                  focus:ring-2 focus:ring-red-400">
</div>

        <!-- TOMBOL -->
        <div class="flex justify-end space-x-3">
            <a href="{{ route('admin.galeri.index') }}"
               class="px-5 py-2 bg-gray-300 rounded-lg">Batal</a>

            <button type="submit"
                    class="px-5 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                Simpan Perubahan
            </button>
        </div>

    </form>
</div>
@endsection
