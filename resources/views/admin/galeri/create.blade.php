@extends('layouts.app')

@section('title', 'Tambah Galeri')

@section('content')
<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-3xl mx-auto bg-white shadow-xl rounded-xl p-8">

        <h2 class="text-3xl font-bold mb-8 text-gray-800">Tambah galeri Baru</h2>

        <form id="formBerita" action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Judul --}}
            <div class="mb-6">
                <label class="font-semibold text-gray-700">Judul Galeri</label>
                <input type="text" name="judul"
                       class="mt-2 w-full border px-4 py-3 rounded-lg focus:ring-2 focus:ring-red-400"
                       required>
            </div>

           {{-- Gambar --}}
<div class="mb-6">
    <label class="font-semibold text-gray-700">Gambar Galeri (Boleh Banyak)</label>

    <input type="file" name="gambar[]" multiple
           class="mt-2 w-full border px-4 py-3 rounded-lg cursor-pointer focus:ring-2 focus:ring-red-400">

    <p class="text-sm text-gray-500 mt-1">Pilih lebih dari satu gambar (JPG/PNG/GIF)</p>
</div>

  {{-- TANGGAL --}}
<div class="mb-6">
    <label class="font-semibold text-gray-700">Tanggal</label>
    <input type="date"
           name="tanggal"
           value="{{ old('tanggal', now()->format('Y-m-d')) }}"
           class="mt-2 w-full border px-4 py-3 rounded-lg
                  focus:ring-2 focus:ring-red-400"
           required>
</div>


            {{-- Tombol --}}
            <div class="flex justify-between mt-8">
                <a href="{{ route('admin.galeri.index') }}"
                   class="px-5 py-3 bg-gray-300 text-gray-800 rounded-lg shadow hover:bg-gray-400 transition">
                    Kembali
                </a>

                <button
                    class="px-6 py-3 bg-red-600 text-white rounded-lg shadow hover:bg-red-700 transition">
                    Simpan galeri
                </button>
            </div>
        </form>

    </div>
</div>


@endsection
