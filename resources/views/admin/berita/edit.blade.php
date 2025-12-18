@extends('layouts.app')

@section('title', 'Edit Berita')

@section('content')
<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-3xl mx-auto bg-white shadow-xl rounded-xl p-8">

        <h2 class="text-3xl font-bold mb-8 text-gray-800">✏️ Edit Berita</h2>

        <form id="formBerita" action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Judul --}}
            <div class="mb-6">
                <label class="font-semibold text-gray-700">Judul Berita</label>
                <input type="text" name="judul"
                       class="mt-2 w-full border px-4 py-3 rounded-lg focus:ring-2 focus:ring-red-400"
                       value="{{ $berita->judul }}" required>
            </div>

            {{-- Tanggal --}}
<div class="mb-6">
    <label class="font-semibold text-gray-700">Tanggal Berita</label>
    <input type="date" name="tanggal"
           value="{{ \Carbon\Carbon::parse($berita->tanggal)->format('Y-m-d') }}"
           class="mt-2 w-full border px-4 py-3 rounded-lg focus:ring-2 focus:ring-red-400"
           required>
</div>

            {{-- Gambar --}}
            <div class="mb-6">
                <label class="font-semibold text-gray-700">Gambar Berita (opsional, upload kalau mau ganti)</label>
                <input type="file" name="gambar"
                       class="mt-2 w-full border px-4 py-3 rounded-lg cursor-pointer focus:ring-2 focus:ring-red-400">

                {{-- Preview gambar lama --}}
                @if($berita->gambar)
                    <p class="text-sm text-gray-600 mt-3">Gambar saat ini:</p>
                    <img src="{{ asset('storage/' . $berita->gambar) }}"
                         class="h-32 rounded-lg border mt-2 shadow">
                @endif
            </div>

            {{-- Quill --}}
            <div class="mb-6">
                <label class="font-semibold text-gray-700">Deskripsi Berita</label>

                <!-- Quill UI -->
                <div id="editor"
                     class="mt-2 border rounded-lg bg-white"
                     style="height: 260px;">
                </div>

                <!-- Hidden input -->
                <input type="hidden" id="isi" name="isi">
            </div>

            {{-- Tombol --}}
            <div class="flex justify-between mt-8">
                <a href="{{ route('admin.berita.index') }}"
                   class="px-5 py-3 bg-gray-300 text-gray-800 rounded-lg shadow hover:bg-gray-400 transition">
                    Kembali
                </a>

                <button
                    class="px-6 py-3 bg-red-600 text-white rounded-lg shadow hover:bg-red-700 transition">
                    Simpan Perubahan
                </button>
            </div>
        </form>

    </div>
</div>

{{-- QUILL CDN --}}
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script>
    // Init Quill
    const quill = new Quill('#editor', {
        theme: 'snow',
        placeholder: 'Edit isi berita di sini...',
        modules: {
            toolbar: [
                [{ header: [1, 2, 3, false] }],
                ['bold', 'italic', 'underline'],
                [{ list: 'ordered' }, { list: 'bullet' }],
                ['link'],
                ['clean']
            ]
        }
    });

    // Set initial content dari database
    quill.root.innerHTML = `{!! $berita->isi !!}`;

    // Saat submit → simpan HTML Quill
    document.getElementById('formBerita').addEventListener('submit', function () {
        document.getElementById('isi').value = quill.root.innerHTML;
    });
</script>

@endsection
