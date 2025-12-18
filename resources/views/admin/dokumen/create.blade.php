@extends('layouts.app')

@section('title', 'Tambah Dokumen')

@section('content')
<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-3xl mx-auto bg-white shadow-xl rounded-xl p-8">

        <h2 class="text-3xl font-bold mb-8 text-gray-800">
            Tambah Dokumen Baru
        </h2>

        <form action="{{ route('admin.dokumen.store') }}"
              method="POST"
              enctype="multipart/form-data">
            @csrf

            {{-- Nama Dokumen --}}
            <div class="mb-6">
                <label class="font-semibold text-gray-700">Nama Dokumen</label>
                <input type="text"
                       name="nama_dokumen"
                       class="mt-2 w-full border px-4 py-3 rounded-lg focus:ring-2 focus:ring-red-400"
                       required>
            </div>

            {{-- Kategori --}}
            <div class="mb-6">
                <label class="font-semibold text-gray-700">Kategori Dokumen</label>
                <select name="kategori_id"
                        class="mt-2 w-full border px-4 py-3 rounded-lg focus:ring-2 focus:ring-red-400"
                        required>
                    <option value="">-- Pilih Kategori --</option>
                    @foreach ($kategori as $k)
                        <option value="{{ $k->id }}">
                            {{ $k->nama_kategori }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- Keterangan --}}
            <div class="mb-6">
                <label class="font-semibold text-gray-700">Keterangan</label>
                <textarea name="keterangan"
                          rows="4"
                          class="mt-2 w-full border px-4 py-3 rounded-lg focus:ring-2 focus:ring-red-400"
                          placeholder="Opsional"></textarea>
            </div>

            {{-- File --}}
            <div class="mb-6">
                <label class="font-semibold text-gray-700">File Dokumen (PDF)</label>
                <input type="file"
                       name="file"
                       accept="application/pdf"
                       class="mt-2 w-full border px-4 py-3 rounded-lg cursor-pointer focus:ring-2 focus:ring-red-400"
                       required>

                <p class="text-sm text-gray-500 mt-1">
                    Format PDF, maksimal 5 MB
                </p>
            </div>

            {{-- Tombol --}}
            <div class="flex justify-between mt-8">
                <a href="{{ route('admin.dokumen.index') }}"
                   class="px-5 py-3 bg-gray-300 text-gray-800 rounded-lg shadow hover:bg-gray-400 transition">
                    Kembali
                </a>

                <button
                    class="px-6 py-3 bg-red-600 text-white rounded-lg shadow hover:bg-red-700 transition">
                    Simpan Dokumen
                </button>
            </div>
        </form>

    </div>
</div>
@endsection
