@extends('layouts.app')

@section('title', 'Galeri Video - Damkar Kota Bogor')
@section('content')

<style>
    @keyframes slideInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .animate-slide-in {
        animation: slideInUp 0.6s ease-out forwards;
    }

    .hover-lift {
        transition: all 0.3s ease;
    }

    .hover-lift:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    }

    .gradient-text {
        background: linear-gradient(135deg, #FCD34D 0%, #EF4444 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    /* responsive iframe */
    .video-wrapper {
        position: relative;
        padding-top: 56.25%; /* 16:9 */
    }

    .video-wrapper iframe {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        border-radius: 0.75rem;
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
            Galeri <span class="gradient-text">Video</span>
        </h1>
        <p class="text-xl text-gray-200 max-w-3xl mx-auto">
            Dokumentasi video kegiatan Dinas Pemadam Kebakaran dan Penyelamatan Kota Bogor
        </p>
    </div>
</section>

<!-- GALERI VIDEO -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">

        @if($videos->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                @foreach ($videos as $video)
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover-lift">

                        <!-- VIDEO -->
                        <div class="p-3">
                            <div class="video-wrapper bg-black rounded-xl overflow-hidden">
                                <iframe
                                   src="{{ $video->url_video }}"
                                    frameborder="0" 
                                    allowfullscreen
                                    loading="lazy">
                                </iframe>
                            </div>
                        </div>

                        <!-- CONTENT -->
                        <div class="p-4 text-center">
                            <h3 class="font-bold text-lg mb-2 break-words leading-snug">
                                {{ $video->judul }}
                            </h3>
                            <p class="text-sm text-gray-500">
                                 {{ $video->tanggal->format('d M Y') }}
                            </p>
                        </div>

                    </div>
                @endforeach

            </div>

            <!-- PAGINATION -->
            <div class="mt-16 flex justify-center">
                {{ $videos->links('pagination::tailwind') }}
            </div>
        @else
            <!-- EMPTY STATE -->
            <div class="flex flex-col items-center justify-center py-20">
                <div class=" mb-8">
                    <svg class="w-32 h-32 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                              d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                </div>
                
                <h3 class="text-2xl font-bold text-gray-700 mb-3">
                    Galeri Video Masih Kosong
                </h3>
                
                <p class="text-gray-500 text-center max-w-md mb-6">
                    Belum ada dokumentasi video yang tersedia saat ini. Silakan cek kembali nanti untuk melihat video terbaru kegiatan kami.
                </p>

                <div class="flex items-center gap-2 text-sm text-gray-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Video dokumentasi akan segera ditambahkan</span>
                </div>
            </div>
        @endif

    </div>
</section>

@endsection