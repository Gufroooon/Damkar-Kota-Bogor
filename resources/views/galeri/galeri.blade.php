@extends('layouts.app')

@section('title', 'Galeri - Damkar Kota Bogor')

@section('content')

<style>
    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-slide-in {
        animation: slideInUp 0.6s ease-out forwards;
    }

    .hover-lift {
        transition: all 0.3s ease;
    }

    .hover-lift:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    .gradient-text {
        background: linear-gradient(135deg, #FCD34D 0%, #EF4444 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    
</style>

<!-- HEADER -->
<section class="relative bg-gradient-to-br from-red-600 via-red-700 to-gray-900 text-white py-24 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-20 w-72 h-72 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-red-400 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 text-center relative z-10 animate-slide-in">
        <h1 class="text-5xl lg:text-6xl font-bold mb-6">
            Galeri <span class="gradient-text">Kegiatan</span>
        </h1>
        <p class="text-xl text-gray-200 max-w-3xl mx-auto">
            Dokumentasi kegiatan Dinas Pemadam Kebakaran dan Penyelamatan Kota Bogor
        </p>
    </div>
</section>

<!-- GALERI GRID -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">

        @if($galeri->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($galeri as $index => $item)
                    @php
                        $images = $item->images;
                        $total = $images->count();
                    @endphp

                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover-lift">

                        <!-- SLIDER -->
                        <div class="relative bg-black h-56 overflow-hidden flex items-center justify-center"
                             id="slider-{{ $index }}">

                            @foreach ($images as $i => $img)
                                <img src="{{ asset($img->file_path) }}"
                                     class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500
                                            {{ $i === 0 ? 'opacity-100' : 'opacity-0' }}"
                                     data-slide="{{ $i }}">
                            @endforeach

                            <!-- PREV -->
                            <button onclick="prev({{ $index }})"
                                    class="absolute left-2 top-1/2 -translate-y-1/2
                                           bg-black/50 hover:bg-black/70 text-white px-2 py-1 rounded-full text-sm">
                                ❮
                            </button>

                            <!-- NEXT -->
                            <button onclick="next({{ $index }})"
                                    class="absolute right-2 top-1/2 -translate-y-1/2
                                           bg-black/50 hover:bg-black/70 text-white px-2 py-1 rounded-full text-sm">
                                ❯
                            </button>

                            <!-- INDICATOR -->
                            <div class="absolute bottom-2 left-1/2 -translate-x-1/2
                                        bg-black/60 text-white px-3 py-0.5 rounded-full text-xs">
                                <span id="current-{{ $index }}">1</span> / {{ $total }}
                            </div>
                        </div>

                        <!-- CONTENT -->
                        <div class="p-4 text-center">
                            <h3 class="font-bold text-lg mb-2 text-center break-words leading-snug">
                                {{ $item->judul }}
                            </h3>
                            <p class="text-sm text-gray-500">
                                {{ $item->tanggal->format('d M Y') }}
                            </p>
                        </div>

                    </div>
                @endforeach
            </div>

            <!-- PAGINATION -->
            <div class="mt-16 flex justify-center">
                {{ $galeri->links('pagination::tailwind') }}
            </div>
        @else
            <!-- EMPTY STATE -->
            <div class="flex flex-col items-center justify-center py-20">
                <div class=" mb-8">
                    <svg class="w-32 h-32 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                              d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                
                <h3 class="text-2xl font-bold text-gray-700 mb-3">
                    Galeri Masih Kosong
                </h3>
                
                <p class="text-gray-500 text-center max-w-md mb-6">
                    Belum ada dokumentasi kegiatan yang tersedia saat ini. Silakan cek kembali nanti untuk melihat galeri foto terbaru.
                </p>

                <div class="flex items-center gap-2 text-sm text-gray-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Dokumentasi akan segera ditambahkan</span>
                </div>
            </div>
        @endif

    </div>
</section>

<script>
    const sliders = {};

    function initSlider(id) {
        const container = document.getElementById(`slider-${id}`);
        const slides = container.querySelectorAll('[data-slide]');
        sliders[id] = {
            index: 0,
            slides: slides,
            total: slides.length
        };
    }

    function show(id) {
        sliders[id].slides.forEach((img, i) => {
            img.classList.toggle('opacity-100', i === sliders[id].index);
            img.classList.toggle('opacity-0', i !== sliders[id].index);
        });
        document.getElementById(`current-${id}`).innerText =
            sliders[id].index + 1;
    }

    function next(id) {
        sliders[id].index = (sliders[id].index + 1) % sliders[id].total;
        show(id);
    }

    function prev(id) {
        sliders[id].index =
            (sliders[id].index - 1 + sliders[id].total) % sliders[id].total;
        show(id);
    }

    document.addEventListener('DOMContentLoaded', () => {
        @foreach ($galeri as $i => $item)
            initSlider({{ $i }});
        @endforeach
    });
</script>

@endsection