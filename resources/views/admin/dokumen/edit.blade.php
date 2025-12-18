@extends('layouts.app')

@section('title', 'Edit Dokumen')

@section('content')
<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-3xl mx-auto bg-white shadow-xl rounded-xl p-8">

        <h2 class="text-3xl font-bold mb-8 text-gray-800">
            Edit Dokumen
        </h2>

        <form action="{{ route('admin.dokumen.update', $dokumen->id) }}"
              method="POST"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Nama Dokumen --}}
            <div class="mb-6">
                <label class="font-semibold text-gray-700">Nama Dokumen</label>
                <input type="text"
                       name="nama_dokumen"
                       value="{{ old('nama_dokumen', $dokumen->nama_dokumen) }}"
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
                        <option value="{{ $k->id }}"
                            {{ $dokumen->kategori_id == $k->id ? 'selected' : '' }}>
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
                          placeholder="Opsional">{{ old('keterangan', $dokumen->keterangan) }}</textarea>
            </div>

            {{-- File --}}
            <div class="mb-6">
                <label class="font-semibold text-gray-700">Ganti File Dokumen (PDF)</label>
                <input type="file"
                       name="file"
                       accept="application/pdf"
                       class="mt-2 w-full border px-4 py-3 rounded-lg cursor-pointer focus:ring-2 focus:ring-red-400">

                <p class="text-sm text-gray-500 mt-1">
                    Kosongkan jika tidak ingin mengganti file
                </p>

                @if ($dokumen->file)
                    <p class="text-sm mt-2">
                        File saat ini:
                        <a href="{{ asset('storage/' . $dokumen->file) }}"
                           target="_blank"
                           class="text-red-600 underline">
                            Lihat Dokumen
                        </a>
                    </p>
                @endif
            </div>

            {{-- Tombol --}}
            <div class="flex justify-between mt-8">
                <a href="{{ route('admin.dokumen.index') }}"
                   class="px-5 py-3 bg-gray-300 text-gray-800 rounded-lg shadow hover:bg-gray-400 transition">
                    Kembali
                </a>

                <button
                    class="px-6 py-3 bg-red-600 text-white rounded-lg shadow hover:bg-red-700 transition">
                    Update Dokumen
                </button>
            </div>
        </form>

    </div>
</div>
@endsection
