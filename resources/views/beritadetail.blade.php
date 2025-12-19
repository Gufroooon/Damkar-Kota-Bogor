@extends('layouts.app')

@section('title', $berita->judul . ' - Damkar Kota Bogor')

@section('content')
<style>
    /* Article Content Styling */
    .article-content {
        font-size: 1.125rem;
        line-height: 1.8;
        color: #374151;
    }
    
    .article-content p {
        margin-bottom: 1.5rem;
    }
    
    .article-content h2 {
        font-size: 1.875rem;
        font-weight: 700;
        margin-top: 2.5rem;
        margin-bottom: 1.25rem;
        color: #111827;
    }
    
    .article-content h3 {
        font-size: 1.5rem;
        font-weight: 600;
        margin-top: 2rem;
        margin-bottom: 1rem;
        color: #1f2937;
    }
    
    .article-content ul, .article-content ol {
        margin: 1.5rem 0;
        padding-left: 2rem;
    }
    
    .article-content li {
        margin-bottom: 0.75rem;
    }
    
    .article-content blockquote {
        border-left: 4px solid #dc2626;
        padding-left: 1.5rem;
        margin: 2rem 0;
        font-style: italic;
        color: #6b7280;
        background: #fef2f2;
        padding: 1.5rem;
        border-radius: 0.5rem;
    }
    
    .article-content img {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
        margin: 2rem auto;
        display: block;
    }
    
    .article-content a {
        color: #dc2626;
        text-decoration: underline;
    }
    
    .article-content strong {
        font-weight: 600;
        color: #111827;
    }
</style>

{{-- QUILL CSS --}}
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<!-- Breadcrumb -->
<div class="bg-white border-b">
    <div class="max-w-5xl mx-auto px-4 py-4">
        <nav class="flex items-center space-x-2 text-sm">
            <a href="/" class="text-gray-600 hover:text-red-600 transition">Beranda</a>
            <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
            </svg>
            <a href="{{ route('public.berita.index') }}" class="text-gray-600 hover:text-red-600 transition">Berita</a>
            <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
            </svg>
            <span class="text-gray-900 font-medium truncate max-w-md">{{ Str::limit($berita->judul, 50) }}</span>
        </nav>
    </div>
</div>

<!-- Main Article -->
<article class="bg-white py-12">
    <div class="max-w-4xl mx-auto px-4">
        
        <!-- Category Badge -->
        <div class="mb-6">
            <span class="inline-flex items-center px-4 py-2 bg-red-600 text-white rounded-full text-sm font-semibold">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"/>
                </svg>
                Berita Terkini
            </span>
        </div>

        <!-- Article Title -->
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-6">
            {{ $berita->judul }}
        </h1>

        <!-- Meta Information -->
        <div class="flex flex-wrap items-center gap-6 text-gray-600 text-sm mb-8 pb-8 border-b border-gray-200">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                </svg>
                <span class="font-medium">{{ \Carbon\Carbon::parse($berita->tanggal)->translatedFormat('d F Y') }}</span>
            </div>
            
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-2 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                </svg>
                <span class="font-medium">Damkar Kota Bogor</span>
            </div>
        </div>

        <!-- Featured Image -->
        <div class="mb-10">
            @if($berita->gambar)
                <img src="{{ asset('storage/' . $berita->gambar) }}"
                     alt="{{ $berita->judul }}"
                     class="w-full h-auto max-h-[600px] object-cover rounded-2xl shadow-2xl">
            @else
                <div class="w-full h-96 bg-gradient-to-br from-red-100 to-red-50 rounded-2xl flex items-center justify-center">
                    <div class="text-center">
                        <svg class="w-24 h-24 mx-auto text-red-300 mb-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-red-400 font-medium">Gambar tidak tersedia</p>
                    </div>
                </div>
            @endif
        </div>

        <!-- Article Body -->
        <div class="ql-snow">
            <div class="ql-editor article-content">
                {!! $berita->isi !!}
            </div>
        </div>

        <!-- Share Section -->
        <div class="mt-12 pt-8 border-t border-gray-200">
            <h3 class="text-lg font-bold text-gray-900 mb-4">Bagikan Berita Ini:</h3>
            <div class="flex flex-wrap gap-3">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" 
                   target="_blank"
                   style="background-color: #1877F2; color: white;"
                   class="flex items-center px-5 py-2.5 rounded-lg hover:opacity-90 transition-all hover:scale-105 shadow-md font-semibold">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                    Facebook
                </a>
                
                <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($berita->judul) }}" 
                   target="_blank"
                   style="background-color: #1DA1F2; color: white;"
                   class="flex items-center px-5 py-2.5 rounded-lg hover:opacity-90 transition-all hover:scale-105 shadow-md font-semibold">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                    </svg>
                    Twitter
                </a>
                
                <a href="https://wa.me/?text={{ urlencode($berita->judul . ' - ' . request()->url()) }}" 
                   target="_blank"
                   style="background-color: #25D366; color: white;"
                   class="flex items-center px-5 py-2.5 rounded-lg hover:opacity-90 transition-all hover:scale-105 shadow-md font-semibold">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    WhatsApp
                </a>
                
                <button onclick="copyToClipboard()" 
                        style="background-color: #4B5563; color: white;"
                        class="flex items-center px-5 py-2.5 rounded-lg hover:opacity-90 transition-all hover:scale-105 shadow-md font-semibold">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                    </svg>
                    Salin Link
                </button>
            </div>
        </div>

        <!-- Back Button -->
        <div class="mt-12">
            <a href="{{ route('public.berita.index') }}"
               class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-red-600 to-red-700 text-white rounded-xl hover:from-red-700 hover:to-red-800 transition-all shadow-lg hover:shadow-xl group">
                <svg class="w-5 h-5 mr-2 group-hover:-translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"/>
                </svg>
                Kembali ke Daftar Berita
            </a>
        </div>

    </div>
</article>

<!-- Berita Terkait Section -->
<section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex items-center justify-between mb-10">
            <h2 class="text-3xl font-bold text-gray-900">Berita Terkait</h2>
            <a href="{{ route('public.berita.index') }}" 
               class="text-red-600 hover:text-red-700 font-semibold flex items-center group">
                Lihat Semua
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
            </a>
        </div>

        @php
        $beritaTerkait = \App\Models\Berita::where('id', '!=', $berita->id)
            ->orderBy('tanggal', 'desc')
            ->take(3)
            ->get();
        @endphp

        @if($beritaTerkait->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-6">
            @foreach($beritaTerkait as $item)
            <a href="{{ route('public.berita.show', $item->id) }}" 
               class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                <div class="relative overflow-hidden h-56">
                    @if($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}" 
                             alt="{{ $item->judul }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-red-100 to-red-50 flex items-center justify-center">
                            <svg class="w-16 h-16 text-red-300" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    @endif
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-red-600 text-white text-xs font-semibold rounded-full">
                            Berita
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <svg class="w-4 h-4 mr-2 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                        </svg>
                        {{ \Carbon\Carbon::parse($item->tanggal)->diffForHumans() }}
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2 group-hover:text-red-600 transition-colors">
                        {{ $item->judul }}
                    </h3>
                    <p class="text-gray-600 line-clamp-3 mb-4">
                        {!! Str::limit(strip_tags($item->isi), 120) !!}
                    </p>
                    <div class="flex items-center text-red-600 font-semibold group-hover:gap-3 transition-all">
                        Baca Selengkapnya
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        @else
        <div class="text-center py-16">
            <svg class="w-20 h-20 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
            <p class="text-gray-500 text-lg">Belum ada berita terkait lainnya</p>
        </div>
        @endif
    </div>
</section>

<script>
function copyToClipboard() {
    const url = window.location.href;
    navigator.clipboard.writeText(url).then(() => {
        alert('Link berhasil disalin!');
    }).catch(err => {
        console.error('Gagal menyalin link:', err);
    });
}
</script>

@endsection