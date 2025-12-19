@extends('layouts.app')

@section('title', 'Kontak - Dinas Pemadam Kebakaran dan Penyelamatan Kota Bogor')

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
                    <path d="M20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4M20 8L12 13L4 8V6L12 11L20 6V8Z"/>
                </svg>
                Hubungi Kami
            </div>
            
            <h1 class="text-5xl lg:text-7xl font-bold mb-6 leading-tight">
                <span class="gradient-text">Kontak</span> Kami
            </h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto">
                Kami siap melayani Anda 24 jam setiap hari. Jangan ragu untuk menghubungi kami untuk keadaan darurat atau informasi lebih lanjut.
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
                    <h2 class="text-3xl font-bold mb-2">Layanan Darurat 24/7</h2>
                    <p class="text-gray-100">Untuk keadaan darurat, hubungi kami segera. Tim kami siap membantu Anda kapan saja.</p>
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

<!-- Contact Information & Map -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            <!-- Contact Info Cards -->
            <div class="space-y-6">
                <div>
                    <h2 class="text-4xl font-bold mb-4">Informasi Kontak</h2>
                    <p class="text-gray-600 text-lg mb-8">Hubungi kami melalui berbagai channel komunikasi yang tersedia</p>
                </div>
                
                <!-- Alamat -->
                <div class="bg-white rounded-2xl p-6 hover-lift border border-gray-100">
                    <div class="flex items-start gap-4">
                        <div class="bg-gradient-to-br from-red-500 to-red-600 text-white w-14 h-14 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-xl mb-2">Alamat Kantor</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Jl. Raya Pajajaran No.01 Raya, RT.07/RW.02,<br>
                                Sukasari, Kec. Bogor Tim.,<br>
                                Kota Bogor, Jawa Barat 16142
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Telepon -->
                <div class="bg-white rounded-2xl p-6 hover-lift border border-gray-100">
                    <div class="flex items-start gap-4">
                        <div class="bg-gradient-to-br from-yellow-400 to-yellow-500 text-gray-900 w-14 h-14 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-xl mb-2">Telepon</h3>
                            <a href="tel:02518322100" class="text-gray-600 hover:text-red-600 transition-colors text-lg">
                                (0251) 8322100
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Email -->
                <div class="bg-white rounded-2xl p-6 hover-lift border border-gray-100">
                    <div class="flex items-start gap-4">
                        <div class="bg-gradient-to-br from-blue-500 to-blue-600 text-white w-14 h-14 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-xl mb-2">Email</h3>
                            <a href="mailto:dpkp@kotabogor.go.id" class="text-gray-600 hover:text-red-600 transition-colors break-all">
                                dpkp@kotabogor.go.id
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Social Media -->
                <div class="bg-white rounded-2xl p-6 hover-lift border border-gray-100">
                    <h3 class="font-bold text-xl mb-4">Media Sosial</h3>
                    <div class="flex gap-4">
                        <a href="https://www.instagram.com/damkarkotabogor_official/" target="_blank" class="bg-gradient-to-br from-pink-500 to-purple-600 text-white w-12 h-12 rounded-xl flex items-center justify-center hover:scale-110 transition-transform shadow-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/@damkarkotabogor_official" target="_blank" class="bg-gradient-to-br from-red-600 to-red-700 text-white w-12 h-12 rounded-xl flex items-center justify-center hover:scale-110 transition-transform shadow-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Map -->
<div class="bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100">
    <div class="h-full min-h-[500px]">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.213517893252!2d106.81331297399427!3d-6.620376893373797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5dca94ac645%3A0x814d2fadf4d257a6!2sDinas%20Pemadam%20Kebakaran%20Kota%20Bogor!5e0!3m2!1sen!2sid!4v1765789044435!5m2!1sen!2sid"
            class="w-full h-full min-h-[500px]"
            style="border:0;"
            allowfullscreen
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>

        </div>
    </div>
</section>


{{-- <section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4">Kirim Pesan</h2>
            <p class="text-gray-600 text-lg">Punya pertanyaan atau saran? Kami senang mendengar dari Anda</p>
        </div>
        
        <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-3xl p-8 md:p-12 shadow-xl border border-gray-200">
            <form class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
                        <input type="text" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 transition-all outline-none" placeholder="Masukkan nama Anda">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                        <input type="email" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 transition-all outline-none" placeholder="email@contoh.com">
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Nomor Telepon</label>
                    <input type="tel" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 transition-all outline-none" placeholder="08xx xxxx xxxx">
                </div>
                
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Subjek</label>
                    <input type="text" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 transition-all outline-none" placeholder="Subjek pesan">
                </div>
                
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Pesan</label>
                    <textarea rows="6" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 transition-all outline-none resize-none" placeholder="Tulis pesan Anda..."></textarea>
                </div>
                
                <button type="submit" class="w-full bg-gradient-to-r from-red-600 to-red-700 text-white px-8 py-4 rounded-xl font-bold hover:from-red-700 hover:to-red-800 transition-all transform hover:scale-105 shadow-lg flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                    </svg>
                    Kirim Pesan
                </button>
            </form>
        </div>
    </div>
</section> --}}

@endsection