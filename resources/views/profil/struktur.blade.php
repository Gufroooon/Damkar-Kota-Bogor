@extends('layouts.app')

@section('title', 'Struktur Organisasi - Damkar Kota Bogor')

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
        animation: slideInUp 0.7s ease-out forwards;
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
            Struktur <span class="gradient-text">Organisasi</span>
        </h1>
        <p class="text-xl text-gray-200 max-w-3xl mx-auto">
            Susunan organisasi Dinas Pemadam Kebakaran dan Penyelamatan Kota Bogor
        </p>
    </div>
</section>

<!-- KONTEN STRUKTUR -->
<section class="py-20 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- DESKRIPSI -->
        <div class="bg-white rounded-2xl shadow-lg p-8 mb-12 animate-slide-in">
            <h2 class="text-3xl font-bold text-gray-900 mb-4 text-center">
                Struktur Organisasi
            </h2>

            <p class="text-gray-700 leading-relaxed text-center max-w-4xl mx-auto">
                Struktur organisasi Dinas Pemadam Kebakaran dan Penyelamatan Kota Bogor
                disusun untuk mendukung efektivitas pelaksanaan tugas dan fungsi,
                serta memperkuat koordinasi dalam penyelenggaraan pelayanan pemadaman
                kebakaran dan penyelamatan kepada masyarakat.
            </p>
        </div>

        <!-- GAMBAR STRUKTUR -->
        <div class="bg-white rounded-2xl shadow-xl p-6 animate-slide-in">
            <div class="overflow-x-auto">
                <img 
                    src="{{ asset('assets/images/struktur.jpg') }}" 
                    alt="Struktur Organisasi Damkar Kota Bogor"
                    class="mx-auto max-w-full h-auto rounded-xl border border-gray-200"
                >
            </div>

            <p class="text-sm text-gray-500 text-center mt-4">
                Gambar Struktur Organisasi Dinas Pemadam Kebakaran dan Penyelamatan Kota Bogor
            </p>
        </div>

    </div>
</section>
@endsection
