@extends('layouts.app')

@section('title', 'Pengaduan SiBadra - Dinas Pemadam Kebakaran dan Penyelamatan Kota Bogor')

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
                Pengaduan <span class="gradient-text">SiBadra</span>
            </h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">
                Sistem Informasi Berbagi Aduan dan Saran Kota Bogor
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
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Pengaduan SiBadra</h2>
            
            <div class="prose prose-lg max-w-none">
                <p class="text-gray-700 leading-relaxed mb-6">
                    SiBadra (Sistem Informasi Berbagi Aduan dan Saran) adalah media bagi Masyarakat Kota Bogor untuk mempermudah dalam menyampaikan pengaduan, saran, dan permintaan layanan publik serta kegawatdaruratan kepada Pemerintah Kota Bogor secara real time.
                </p>
                
                <p class="text-gray-700 leading-relaxed mb-8">
                    Sampaikan pengaduan atau saran mengenai Pemerintah Kota Bogor melalui link berikut :
                </p>

                <div class="flex justify-center my-10">
    <img src="{{ asset('assets/images/sibadra.png') }}"
         alt="SiBadra Logo"
         class="w-48 md:w-56 rounded-lg opacity-90">
</div>


                <!-- Download Links -->
                <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl p-8 border border-gray-200">
                    <h3 class="text-xl font-bold mb-6 text-gray-800">Download Aplikasi SiBadra</h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-start gap-4">
    <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg bg-white">
        <img src="{{ asset('assets/images/playstore.png') }}"
             alt="Google Play"
             class="w-8 h-8 object-contain">
    </div>
    <div class="flex-1">
        <p class="font-semibold text-gray-800 mb-2">Android (Google Play) :</p>
        <a href="https://play.google.com/store/apps/details?id=com.bogor.aspirasi"
           target="_blank"
           class="text-red-600 hover:text-red-700 underline break-all">
            Download di Google Play
        </a>
    </div>
</div>


                        <div class="flex items-start gap-4 pt-4 border-t border-gray-300">
    <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg bg-white">
        <img src="{{ asset('assets/images/appstore.png') }}"
             alt="App Store"
             class="w-8 h-8 object-contain">
    </div>
    <div class="flex-1">
        <p class="font-semibold text-gray-800 mb-2">iOS (App Store) :</p>
        <a href="https://apps.apple.com/id/app/sibadra/id1484986803"
           target="_blank"
           class="text-red-600 hover:text-red-700 underline break-all">
            Download di App Store
        </a>
    </div>
</div>

<div class="flex items-start gap-4 pt-4 border-t border-gray-300">
    <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg bg-white">
        <img src="{{ asset('assets/images/web.png') }}"
             alt="Website"
             class="w-7 h-7 object-contain">
    </div>
    <div class="flex-1">
        <p class="font-semibold text-gray-800 mb-2">Website :</p>
        <a href="https://sibadra.kotabogor.go.id"
           target="_blank"
           class="text-red-600 hover:text-red-700 underline break-all">
            sibadra.kotabogor.go.id
        </a>
    </div>
</div>

                    </div>
                </div>

                <!-- Info Box -->
                <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mt-8 rounded-r-xl">
                    <div class="flex items-start gap-4">
                        <svg class="w-6 h-6 text-blue-600 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <h4 class="font-bold text-blue-900 mb-2">Informasi Penting</h4>
                            <p class="text-blue-800 text-sm leading-relaxed">
                                SiBadra merupakan aplikasi resmi Pemerintah Kota Bogor. Untuk melaporkan pengaduan atau menyampaikan aspirasi terkait seluruh layanan publik di Kota Bogor termasuk Dinas Pemadam Kebakaran, silakan gunakan aplikasi SiBadra atau kunjungi website resmi SiBadra.
                            </p>
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
                        <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Real Time</h3>
                <p class="text-gray-600">
                    Pengaduan langsung diproses dan dapat dipantau perkembangannya secara real time
                </p>
            </div>

            <div class="bg-white rounded-2xl p-8 hover-lift border border-gray-100 shadow-md">
                <div class="bg-gradient-to-br from-yellow-400 to-yellow-500 text-gray-900 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Mudah & Cepat</h3>
                <p class="text-gray-600">
                    Interface yang user-friendly memudahkan masyarakat dalam menyampaikan aspirasi
                </p>
            </div>

            <div class="bg-white rounded-2xl p-8 hover-lift border border-gray-100 shadow-md">
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 text-white w-16 h-16 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Untuk Semua</h3>
                <p class="text-gray-600">
                    Semua lapisan masyarakat Kota Bogor dapat menggunakan layanan ini
                </p>
            </div>
        </div>

    </div>
</section>

@endsection