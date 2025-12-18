@extends('layouts.app')

@section('title', 'Tambah Berita')

@section('content')
<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-3xl mx-auto bg-white shadow-xl rounded-xl p-8">

        <h2 class="text-3xl font-bold mb-8 text-gray-800"> Tambah Berita Baru</h2>

        <form id="formBerita" action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Judul --}}
            <div class="mb-6">
                <label class="font-semibold text-gray-700">Judul Berita</label>
                <input type="text" name="judul"
                       class="mt-2 w-full border px-4 py-3 rounded-lg focus:ring-2 focus:ring-red-400"
                       required>
            </div>

            {{-- Tanggal --}}
<div class="mb-6">
    <label class="font-semibold text-gray-700">Tanggal Berita</label>
    <input type="date" name="tanggal"
           value="{{ date('Y-m-d') }}"
           class="mt-2 w-full border px-4 py-3 rounded-lg focus:ring-2 focus:ring-red-400"
           required>
</div>

            {{-- Gambar --}}
            <div class="mb-6">
                <label class="font-semibold text-gray-700">Gambar Berita</label>
                <input type="file" name="gambar"
                       class="mt-2 w-full border px-4 py-3 rounded-lg cursor-pointer focus:ring-2 focus:ring-red-400">
            </div>

            {{-- QUILL --}}
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
                    Simpan Berita
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
        placeholder: 'Tulis isi berita lengkap di sini...',
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

    // Masukkan HTML Quill ke hidden input
    document.getElementById('formBerita').addEventListener('submit', function () {
        document.getElementById('isi').value = quill.root.innerHTML;
    });
</script>

@endsection
