@extends('layouts.app')

@section('title', 'Pengaduan SP4N-LAPOR - Dinas Pemadam Kebakaran dan Penyelamatan Kota Bogor')

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
    
    @keyframes pulse-glow {
        0%, 100% { box-shadow: 0 0 20px rgba(239, 68, 68, 0.5); }
        50% { box-shadow: 0 0 40px rgba(239, 68, 68, 0.8); }
    }
    
    .animate-slide-in {
        animation: slideInUp 0.6s ease-out forwards;
    }
    
    .animate-pulse-glow {
        animation: pulse-glow 2s ease-in-out infinite;
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
                    <path d="M13 7.5L10 12.5L13 17.5L14.5 14.5L13 7.5M11 15.5V17.5L8.5 20.5L6.5 18.5L9 15.5H11M13 6.5L11 1.5L9 6.5H13M18.5 10L14 6L13 7.5L14.5 10H18.5M5.5 10L10 6L11 7.5L9.5 10H5.5Z"/>
                </svg>
                Layanan Pengaduan Masyarakat
            </div>
            
            <h1 class="text-5xl lg:text-7xl font-bold mb-6 leading-tight">
                Pengaduan <span class="gradient-text">SP4N LAPOR</span>
            </h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">
                Sistem Pengelolaan Pengaduan Pelayanan Publik Nasional
            </p>
        </div>
    </div>
</section>

<!-- Emergency Banner -->
<section class="relative -mt-12 z-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-red-600 to-red-700 rounded-3xl shadow-2xl p-8 animate-pulse-glow">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center text-white text-center md:text-left">
                <div class="md:col-span-2">
                    <h2 class="text-3xl font-bold mb-2">Darurat? Hubungi Segera!</h2>
                    <p class="text-gray-100">Untuk keadaan darurat, Silahkan langsung Hubungi nomor darurat kami.</p>
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

<!-- Content Section -->
<section class="py-20 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Main Content -->
        <div class="bg-white rounded-3xl p-8 md:p-12 shadow-xl border border-gray-200 mb-12">
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Pengaduan SP4N Lapor</h2>
            
            <div class="prose prose-lg max-w-none">
                <p class="text-gray-700 leading-relaxed mb-6">
                    Sistem Pengelolaan Pengaduan Pelayanan Publik Nasional (SP4N) – Layanan Aspirasi dan Pengaduan Online Rakyat (LAPOR) atau dikenal dengan SP4N-LAPOR adalah Aplikasi Sistem Pengelolaan Pengaduan Pelayanan Publik Nasional menggunakan aplikasi LAPOR!
                </p>
                
                <p class="text-gray-700 leading-relaxed mb-8">
                    Sampaikan pengaduan atau saran mengenai semua pelayanan publik melalui link berikut :
                </p>

                <!-- LAPOR Logo -->
               <div class="flex justify-center my-10">
    <img src="{{ asset('assets/images/sp4n.png') }}"
         alt="sp4n Logo"
         class="w-48 md:w-56 rounded-lg opacity-90">
</div>

                <!-- Download Links -->
                <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl p-8 border border-gray-200">
                    <h3 class="text-xl font-bold mb-6 text-gray-800">Download Aplikasi LAPOR!</h3>
                    
                    <div class="space-y-4">
                        <!-- Android -->
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg bg-white">
        <img src="{{ asset('assets/images/playstore.png') }}"
             alt="Google Play"
             class="w-8 h-8 object-contain">
    </div>
                            <div class="flex-1">
                                <p class="font-semibold text-gray-800 mb-2">Android (Google Play) :</p>
                                <a href="https://play.google.com/store/apps/details?id=com.deptech.lapor&hl=in&gl=US" target="_blank" class="text-red-600 hover:text-red-700 underline break-all">
                                    https://play.google.com/store/apps/details?id=com.deptech.lapor&hl=in&gl=US
                                </a>
                            </div>
                        </div>

                        <!-- iOS -->
                        <div class="flex items-start gap-4 pt-4 border-t border-gray-300">
                           <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg bg-white">
        <img src="{{ asset('assets/images/appstore.png') }}"
             alt="App Store"
             class="w-8 h-8 object-contain">
    </div>
                            <div class="flex-1">
                                <p class="font-semibold text-gray-800 mb-2">iOS (Apple Store) :</p>
                                <a href="https://apps.apple.com/id/app/sp4n-lapor/id1486554343" target="_blank" class="text-red-600 hover:text-red-700 underline break-all">
                                    https://apps.apple.com/id/app/sp4n-lapor/id1486554343
                                </a>
                            </div>
                        </div>

                        <!-- Web -->
                        <div class="flex items-start gap-4 pt-4 border-t border-gray-300">
                            <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg bg-white">
        <img src="{{ asset('assets/images/web.png') }}"
             alt="Website"
             class="w-7 h-7 object-contain">
    </div>
                            <div class="flex-1">
                                <p class="font-semibold text-gray-800 mb-2">Website :</p>
                                <a href="https://www.lapor.go.id" target="_blank" class="text-red-600 hover:text-red-700 underline break-all">
                                    www.lapor.go.id
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Feature Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-8 hover-lift border border-gray-100 shadow-md">
                <div class="bg-gradient-to-br from-red-500 to-red-600 text-white w-16 h-16 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Mudah Diakses</h3>
                <p class="text-gray-600">
                    Akses layanan pengaduan kapan saja melalui aplikasi mobile atau website
                </p>
            </div>

            <div class="bg-white rounded-2xl p-8 hover-lift border border-gray-100 shadow-md">
                <div class="bg-gradient-to-br from-yellow-400 to-yellow-500 text-gray-900 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Terintegrasi Nasional</h3>
                <p class="text-gray-600">
                    Sistem terintegrasi dengan pemerintah pusat untuk penanganan optimal
                </p>
            </div>

            <div class="bg-white rounded-2xl p-8 hover-lift border border-gray-100 shadow-md">
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 text-white w-16 h-16 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Transparan & Aman</h3>
                <p class="text-gray-600">
                    Lacak status pengaduan dan data Anda dijamin keamanannya
                </p>
            </div>
        </div>

    </div>
</section>

@endsection