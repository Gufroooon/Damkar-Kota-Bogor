@extends('layouts.app')

@section('title', $berita->judul . ' - Damkar Kota Bogor')

@section('content')
<style>
    /* style tetap sama */
</style>

<!-- Modern Header -->
<section class="relative bg-gradient-to-br from-red-600 via-red-700 to-gray-900 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-20 w-72 h-72 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-red-400 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-4xl mx-auto px-4 relative z-10 text-center animate-slide-in">
        <div class="inline-block px-4 py-2 bg-yellow-400 text-red-900 rounded-full text-sm font-semibold mb-6">
         Detail Berita
        </div>

        <!-- JUDUL DINAMIS -->
        <h1 class="text-4xl lg:text-5xl font-bold mb-6 leading-tight">
            {{ $berita->judul }}
        </h1>

        <div class="flex items-center justify-center text-sm text-gray-300 space-x-6">
            <div class="flex items-center">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1z"/>
                </svg>
                <!-- TANGGAL DINAMIS -->
               {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}

            </div>       
        </div>
    </div>
</section>

<!-- Content -->
{{-- QUILL CSS (WAJIB UNTUK STYLING FORMAT) --}}
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<section class="py-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4">
       
        <article class="bg-white rounded-2xl shadow-lg p-8 md:p-12">
            
            <div class="mb-8">
    @if($berita->gambar)
        <img src="{{ asset('storage/' . $berita->gambar) }}"
             class="w-full h-80 object-cover rounded-2xl shadow-lg">
    @else
        <img src="https://via.placeholder.com/800x400?text=No+Image" 
             class="w-full h-80 object-cover rounded-2xl shadow-lg">
    @endif
</div>

           <!-- ISI BERITA DINAMIS DENGAN STYLE QUILL -->
<div class="ql-snow">
    <div class="ql-editor prose prose-lg max-w-none">
        {!! $berita->isi !!}
    </div>
</div>


            <div class="mt-12 flex justify-between items-center">
               <a href="{{ route('public.berita.index') }}"

                   class="text-red-600 hover:text-red-700 font-semibold inline-flex items-center group">
                    <svg class="w-5 h-5 mr-2 group-hover:-translate-x-1 transition-transform" fill="currentColor">
                        <path d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293z"/>
                    </svg>
                    Kembali ke Daftar Berita
                </a>
            </div>
           
        </article>
    </div>
</section>

@endsection
