@extends('layouts.app')

@section('title', 'Daftar Berita - Damkar Kota Bogor')

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

<!-- HEADER -->
<section class="relative bg-gradient-to-br from-red-600 via-red-700 to-gray-900 text-white py-24 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-20 w-72 h-72 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-red-400 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center animate-slide-in">
        <h1 class="text-5xl lg:text-6xl font-bold mb-6 leading-tight">
            Berita dan <span class="gradient-text">Informasi</span>
        </h1>
        <p class="text-xl text-gray-200 max-w-3xl mx-auto">
            Informasi terbaru dari Dinas Pemadam Kebakaran dan Penyelamatan Kota Bogor
        </p>
    </div>
</section>

<!-- LIST BERITA -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- 🔍 SEARCH & FILTER -->
        <form method="GET" class="mb-14">
            <div class="flex flex-col md:flex-row gap-4">

                <!-- SEARCH -->
                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Cari judul berita..."
                    class="w-full md:w-1/2 px-4 py-3 rounded-xl border
                           focus:ring-2 focus:ring-red-500 focus:outline-none"
                >

                <!-- SORT -->
                <select
                    name="sort"
                    class="w-full md:w-1/4 px-4 py-3 rounded-xl border
                           focus:ring-2 focus:ring-red-500 focus:outline-none"
                >
                    <option value="terbaru" {{ request('sort', 'terbaru') === 'terbaru' ? 'selected' : '' }}>
                       Urutan Terbaru
                    </option>
                    <option value="terlama" {{ request('sort') === 'terlama' ? 'selected' : '' }}>
                       Urutan Terlama
                    </option>
                </select>

                <!-- BUTTON -->
                <button
                    class="bg-red-600 text-white px-6 py-3 rounded-xl
                           hover:bg-red-700 transition">
                    Cari
                </button>

            </div>
        </form>

        <!-- GRID BERITA -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @forelse($berita as $item)
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover-lift border border-gray-100">

                    <!-- GAMBAR -->
                    <div class="relative overflow-hidden group">
                        <img src="{{ asset('storage/' . $item->gambar) }}"
                             class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>

                    <div class="p-6">
                        <!-- TANGGAL -->
                        <div class="flex items-center text-gray-500 text-sm mb-3">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                      d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1z"
                                      clip-rule="evenodd"/>
                            </svg>
                            {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}

                        </div>

                        <!-- JUDUL -->
                        <h3 class="text-xl font-bold mb-3 hover:text-red-600 transition-colors break-words">
                            {{ $item->judul }}
                        </h3>

                        <!-- DESKRIPSI -->
                        <p class="text-gray-600 mb-4 break-words leading-relaxed">
                            {{ Str::limit(str_replace('&nbsp;', ' ', strip_tags($item->isi)), 120) }}
                        </p>

                        <!-- DETAIL -->
                        <a href="{{ route('public.berita.show', $item->id) }}"
                           class="text-red-600 font-semibold hover:text-red-700 inline-flex items-center group">
                            Baca Selengkapnya
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-2 transition-transform"
                                 fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                      d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center text-gray-500 py-20">
                    Tidak ada berita ditemukan.
                </div>
            @endforelse

        </div>

        <!-- PAGINATION -->
        <div class="mt-16 flex justify-center">
            {{ $berita->links('pagination::tailwind') }}
        </div>

    </div>
</section>
@endsection
