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

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            @forelse ($videos as $video)
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
                            {{ $video->created_at->translatedFormat('d F Y') }}
                        </p>
                    </div>

                </div>
            @empty
                <div class="col-span-full text-center py-16 text-gray-500">
                    Belum ada video yang ditampilkan.
                </div>
            @endforelse

        </div>

        <!-- PAGINATION -->
        <div class="mt-16 flex justify-center">
            {{ $videos->links('pagination::tailwind') }}
        </div>

    </div>
</section>


@endsection
