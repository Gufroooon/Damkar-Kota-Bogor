@extends('layouts.app')
<script>
    function slideLeft(id) {
        const slider = document.getElementById(id);
        slider.scrollBy({ left: -slider.clientWidth, behavior: 'smooth' });
    }

    function slideRight(id) {
        const slider = document.getElementById(id);
        slider.scrollBy({ left: slider.clientWidth, behavior: 'smooth' });
    }
</script>

@section('title', 'Dinas Pemadam Kebakaran dan Penyelamatan Kota Bogor')

@section('content')
<style>
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
    
    @keyframes pulse-glow {
        0%, 100% { box-shadow: 0 0 20px rgba(239, 68, 68, 0.5); }
        50% { box-shadow: 0 0 40px rgba(239, 68, 68, 0.8); }
    }
    
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
    
    
    .animate-pulse-glow {
        animation: pulse-glow 2s ease-in-out infinite;
    }
    
    .animate-slide-in {
        animation: slideInUp 0.6s ease-out forwards;
    }
    
    .glass-effect {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    .hover-lift {
        transition: all 0.3s ease;
    }
    
    .hover-lift:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }
    
    .gradient-text {
        background: linear-gradient(135deg, #FCD34D 0%, #EF4444 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
</style>

<section class="relative bg-gradient-to-br from-red-600 via-red-700 to-gray-900 text-white py-24 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-20 w-72 h-72 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-red-400 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="animate-slide-in">
               <div class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-400 text-red-900 rounded-full text-sm font-semibold mb-6">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-red-900" viewBox="0 0 24 24" fill="currentColor">
        <path d="M4 20H20L18 10H6L4 20ZM13 2H11V6H13V2ZM5.636 4.222L4.222 5.636L6.343 7.757L7.757 6.343L5.636 4.222ZM18.364 4.222L16.243 6.343L17.657 7.757L19.778 5.636L18.364 4.222ZM12 8C13.657 8 15 9.343 15 11C15 12.657 13.657 14 12 14C10.343 14 9 12.657 9 11C9 9.343 10.343 8 12 8Z"/>
    </svg>
    Siaga 24 Jam
</div>

                <h1 class="text-5xl lg:text-7xl font-bold mb-6 leading-tight">
                    Melindungi <span class="gradient-text">Kota Bogor</span> Dengan Dedikasi
                </h1>
                <p class="text-xl mb-8 text-gray-200">
                    Tim profesional kami siap sedia melayani masyarakat dengan respons cepat dan penanganan terbaik untuk setiap situasi darurat.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="tel:02518322100"
   class="group bg-gradient-to-r from-yellow-400 to-yellow-500 text-gray-900 px-8 py-4 rounded-xl font-bold hover:from-yellow-500 hover:to-yellow-600 transition-all transform hover:scale-105 shadow-lg flex items-center justify-center">
    
    <svg class="w-5 h-5 mr-2 group-hover:rotate-12 transition-transform" fill="currentColor" viewBox="0 0 20 20">
        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
    </svg>

    Hubungi Damkar
</a>

                    <a href="/profil/sejarah" class="glass-effect text-white px-8 py-4 rounded-xl font-bold hover:bg-white hover:bg-opacity-20 transition-all transform hover:scale-105 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                        </svg>
                       Sejarah Kami
                    </a>
                </div>
            </div>
            
            <div class="relative animate-slide-in">
                <div class=" absolute inset-0 bg-gradient-to-r from-yellow-400 to-red-500 rounded-3xl blur-2xl opacity-50"></div>
                <img src="/assets/images/hero.jpg" alt="Damkar Bogor" class="relative rounded-3xl shadow-2xl border-4 border-white border-opacity-20">
            </div>
        </div>
    </div>
</section>

<section class="relative -mt-12 z-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-red-600 to-red-700 rounded-3xl shadow-2xl p-8 animate-pulse-glow">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center text-white text-center md:text-left">
                <div class="md:col-span-2">
                    <h2 class="text-3xl font-bold mb-2">Layanan Darurat 24/7</h2>
                    <p class="text-gray-100">Hubungi kami segera untuk keadaan darurat. Tim kami siap membantu Anda kapan saja.</p>
                </div>
                <div class="flex items-center justify-center">
                    <a href="tel:112" class="bg-white text-red-600 px-12 py-6 rounded-2xl text-5xl font-bold hover:bg-yellow-400 hover:text-gray-900 transition-all transform hover:scale-110 shadow-xl">
                        112
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4">Layanan Unggulan Kami</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Berbagai layanan profesional untuk keselamatan dan keamanan masyarakat Kota Bogor
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-8 hover-lift border border-gray-100">
                <div class="bg-gradient-to-br from-red-500 to-red-600 text-white w-20 h-20 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Pemadaman Kebakaran</h3>
                <p class="text-gray-600 mb-6">Respons cepat dengan peralatan modern untuk memadamkan api dan menyelamatkan properti Anda.</p>
                
            </div>
            
            <div class="bg-white rounded-2xl p-8 hover-lift border border-gray-100">
                <div class="bg-gradient-to-br from-yellow-400 to-yellow-500 text-gray-900 w-20 h-20 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Penyelamatan</h3>
                <p class="text-gray-600 mb-6">Tim profesional terlatih untuk berbagai situasi penyelamatan dengan standar keselamatan tertinggi.</p>

            </div>
            
            <div class="bg-white rounded-2xl p-8 hover-lift border border-gray-100">
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 text-white w-20 h-20 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Edukasi Keselamatan</h3>
                <p class="text-gray-600 mb-6">Program komprehensif untuk meningkatkan kesadaran dan pengetahuan masyarakat tentang keselamatan.</p>
                
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gradient-to-br from-gray-900 via-gray-800 to-red-900 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-red-500 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4">Capaian & Dedikasi Kami</h2>
            <p class="text-gray-300 text-lg">Data kinerja tim Pemadam Kebakaran Kota Bogor</p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center glass-effect rounded-2xl p-8 hover-lift">
                <div class="text-6xl font-bold mb-3 gradient-text">1,250</div>
                <p class="text-gray-300 text-lg">Kebakaran Dipadamkan</p>
            </div>
            <div class="text-center glass-effect rounded-2xl p-8 hover-lift">
                <div class="text-6xl font-bold mb-3 gradient-text">850</div>
                <p class="text-gray-300 text-lg">Penyelamatan Berhasil</p>
            </div>
            <div class="text-center glass-effect rounded-2xl p-8 hover-lift">
                <div class="text-6xl font-bold mb-3 gradient-text">95%</div>
                <p class="text-gray-300 text-lg">Tingkat Keberhasilan</p>
            </div>
            <div class="text-center glass-effect rounded-2xl p-8 hover-lift">
                <div class="text-6xl font-bold mb-3 gradient-text">24/7</div>
                <p class="text-gray-300 text-lg">Layanan Siaga</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-12">
            <div>
                <h2 class="text-4xl font-bold mb-2">Berita & Kegiatan Terbaru</h2>
                <p class="text-gray-600">Update informasi dari Damkar Kota Bogor</p>
            </div>
            <a href="/berita" class="hidden md:inline-flex items-center text-red-600 font-semibold hover:text-red-700 group">
                Lihat Semua 
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-2 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="..." />
                </svg>
            </a>
        </div>

        <!-- GRID FIX -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
           @forelse($berita as $item)

    {{-- KARTU BERITA --}}
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover-lift border border-gray-100">

        <div class="relative overflow-hidden group">
            <img src="{{ asset('storage/' . $item->gambar) }}" 
                 class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">
        </div>

        <div class="p-6">
            <div class="flex items-center text-gray-500 text-sm mb-3">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 
                    2 0 00-2 2v10a2 2 0 002 2h12a2 
                    2 0 002-2V6a2 2 0 00-2-2h-1V3a1 
                    1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 
                    6a1 1 0 000 2h8a1 1 0 100-2H6z"
                    clip-rule="evenodd" />
                </svg>

              {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
            </div>

            <h3 class="text-xl font-bold mb-3 hover:text-red-600 transition-colors break-words leading-relaxed">
                {{ $item->judul }}
            </h3>

         <p class="text-gray-600 mb-4 leading-relaxed break-words">
    {{ Str::limit(
        trim(
            preg_replace(
                '/\s+/u',
                ' ', 
                html_entity_decode(strip_tags($item->isi), ENT_QUOTES | ENT_HTML5, 'UTF-8')
            )
        ),
        120
    ) }}
</p>



            <a href="{{ route('public.berita.show', $item->id) }}"
               class="text-red-600 font-semibold hover:text-red-700 inline-flex items-center group">
                Baca Selengkapnya
                <svg class="w-4 h-4 ml-2 group-hover:translate-x-2 transition-transform">
                    <path d="M10.293 3.293..." />
                </svg>
            </a>
        </div>
    </div>

@empty

    {{-- TAMPILAN JIKA TIDAK ADA BERITA --}}
    <div class="col-span-3 text-center py-16">
        <h3 class="text-2xl font-normal text-gray-600">
            Belum ada berita.
        </h3>
    </div>

@endforelse

        </div>
        <!-- END GRID -->
    </div>
</section>


<!-- GALERI HOME -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">

        <div class="text-center mb-14">
            <h2 class="text-4xl font-bold mb-2">Galeri Dokumentasi</h2>
            <p class="text-gray-600">Foto & Video Terbaru</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            @foreach ($galeriFoto as $index => $item)
@php
    $images = $item->images;
    $total = $images->count();
@endphp

<div class="bg-white rounded-2xl shadow-lg overflow-hidden hover-lift">

    {{-- SLIDER --}}
    <div class="relative bg-black h-56 overflow-hidden"
         id="slider-foto-{{ $index }}">

        @foreach ($images as $i => $img)
            <img
                src="{{ asset($img->file_path) }}"
                class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500
                       {{ $i === 0 ? 'opacity-100' : 'opacity-0' }}"
                data-slide>
        @endforeach

        @if ($total > 1)
        {{-- PREV --}}
        <button onclick="prevFoto({{ $index }})"
                class="absolute left-2 top-1/2 -translate-y-1/2
                       bg-black/50 hover:bg-black/70 text-white w-8 h-8 rounded-full">
            ❮
        </button>

        {{-- NEXT --}}
        <button onclick="nextFoto({{ $index }})"
                class="absolute right-2 top-1/2 -translate-y-1/2
                       bg-black/50 hover:bg-black/70 text-white w-8 h-8 rounded-full">
            ❯
        </button>

        {{-- INDICATOR --}}
        <div class="absolute bottom-2 left-1/2 -translate-x-1/2
                    bg-black/60 text-white px-3 py-0.5 rounded-full text-xs">
            <span id="current-foto-{{ $index }}">1</span> / {{ $total }}
        </div>
        @endif
    </div>

    {{-- CONTENT --}}
    <div class="p-4 text-center">
        <h3 class="font-semibold break-words">
            {{ $item->judul }}
        </h3>
        <p class="text-sm text-gray-500">
               {{ $item->tanggal->format('d M Y') }}
        </p>
    </div>

</div>
@endforeach

          @foreach ($galeriVideo as $video)
<div class="bg-white rounded-2xl shadow-lg overflow-hidden hover-lift border border-gray-100">

    {{-- VIDEO (DIAM, BISA DIKLIK) --}}
    <div class="relative h-56 bg-black overflow-hidden">
        <iframe
            src="{{ $video->url_video }}"
            class="w-full h-full"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
            loading="lazy">
        </iframe>
    </div>

    <div class="p-4 text-center">
        <h3 class="font-semibold break-words">
            {{ $video->judul }}
        </h3>
        <p class="text-sm text-gray-500">
            {{ \Carbon\Carbon::parse($video->tanggal)->translatedFormat('d F Y') }}
        </p>
    </div>
</div>
@endforeach




        </div>

    </div>
</section>


<!-- SCRIPT SLIDER -->
<script>
const fotoSliders = {};

function initFotoSlider(id) {
    const container = document.getElementById(`slider-foto-${id}`);
    if (!container) return;

    const slides = container.querySelectorAll('[data-slide]');
    fotoSliders[id] = {
        index: 0,
        slides: slides,
        total: slides.length
    };
}

function showFoto(id) {
    const slider = fotoSliders[id];
    slider.slides.forEach((img, i) => {
        img.classList.toggle('opacity-100', i === slider.index);
        img.classList.toggle('opacity-0', i !== slider.index);
    });

    const indicator = document.getElementById(`current-foto-${id}`);
    if (indicator) indicator.innerText = slider.index + 1;
}

function nextFoto(id) {
    fotoSliders[id].index =
        (fotoSliders[id].index + 1) % fotoSliders[id].total;
    showFoto(id);
}

function prevFoto(id) {
    fotoSliders[id].index =
        (fotoSliders[id].index - 1 + fotoSliders[id].total) % fotoSliders[id].total;
    showFoto(id);
}

document.addEventListener('DOMContentLoaded', () => {
    @foreach ($galeriFoto as $i => $item)
        initFotoSlider({{ $i }});
    @endforeach
});
</script>




@endsection