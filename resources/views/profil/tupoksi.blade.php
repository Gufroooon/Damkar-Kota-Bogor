@extends('layouts.app')

@section('title', 'Tugas Pokok dan Fungsi - Dinas Pemadam Kebakaran dan Penyelamatan Kota Bogor')

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
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }
    
    .gradient-text {
        background: linear-gradient(135deg, #FCD34D 0%, #EF4444 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
</style>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-red-600 via-red-700 to-gray-900 text-white py-24 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-20 w-72 h-72 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-red-400 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center animate-slide-in">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-400 text-red-900 rounded-full text-sm font-semibold mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M19,2L14,6.5V17.5L19,13V2M6.5,5C4.55,5 2.45,5.4 1,6.5V21.16C1,21.41 1.25,21.66 1.5,21.66C1.6,21.66 1.65,21.59 1.75,21.59C3.1,20.94 5.05,20.5 6.5,20.5C8.45,20.5 10.55,20.9 12,22C13.35,21.15 15.8,20.5 17.5,20.5C19.15,20.5 20.85,20.81 22.25,21.56C22.35,21.61 22.4,21.59 22.5,21.59C22.75,21.59 23,21.34 23,21.09V6.5C22.4,6.05 21.75,5.75 21,5.5V19C19.9,18.65 18.7,18.5 17.5,18.5C15.8,18.5 13.35,19.15 12,20V6.5C10.55,5.4 8.45,5 6.5,5Z"/>
                </svg>
                Profil Organisasi
            </div>
            
            <h1 class="text-5xl lg:text-7xl font-bold mb-6 leading-tight">
                Tugas Pokok <span class="gradient-text">dan Fungsi</span>
            </h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">
                Dinas Pemadam Kebakaran dan Penyelamatan Kota Bogor
            </p>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Introduction -->
        <div class="max-w-4xl mx-auto mb-16 animate-slide-in">
            <div class="bg-gradient-to-br from-red-50 to-yellow-50 rounded-3xl p-8 md:p-12 border-2 border-red-100">
                <div class="flex items-start gap-6">
                    <div class="bg-gradient-to-br from-red-500 to-red-600 text-white w-16 h-16 rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                            <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"/>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800 mb-3">Tentang Tupoksi</h2>
                        <p class="text-gray-700 leading-relaxed">
                            Tugas Pokok dan Fungsi (Tupoksi) Dinas Pemadam Kebakaran dan Penyelamatan Kota Bogor merupakan pedoman dalam menjalankan kewenangan dan tanggung jawab untuk melaksanakan urusan pemerintahan di bidang pencegahan, penanggulangan kebakaran, dan penyelamatan.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        

        <!-- PDF Viewer Section -->
        <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-3xl p-8 md:p-12 border border-gray-200">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold mb-4">Dokumen Tupoksi Lengkap</h2>
                <p class="text-gray-600">Unduh atau lihat dokumen lengkap Tugas Pokok dan Fungsi DPKP Kota Bogor</p>
            </div>

            <!-- PDF Viewer -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden mb-6">
                <iframe 
    src="{{ asset('assets/tupoksi.pdf') }}"
    class="w-full h-[600px] border-0"
    title="Dokumen Tupoksi DPKP Kota Bogor">
</iframe>

            </div>

            <!-- Download Button -->
            <div class="text-center">
                <a href="{{ asset('assets/tupoksi.pdf') }}" 
                   download 
                   target="_blank"
                   class="inline-flex items-center gap-3 bg-gradient-to-r from-red-600 to-red-700 text-white px-8 py-4 rounded-xl font-bold hover:from-red-700 hover:to-red-800 transition-all transform hover:scale-105 shadow-lg">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                    Unduh Dokumen Tupoksi (PDF)
                </a>
            </div>
        </div>

    </div>
</section>

@endsection