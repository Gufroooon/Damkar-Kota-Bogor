<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Damkar Kota Bogor')</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Mobile Menu Animation */
        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-in-out;
        }

        .mobile-menu.active {
            max-height: 800px;
        }

        /* Navigation Link Effects */
        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #EF4444, #FCD34D);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        /* Desktop Dropdown */
        .dropdown-menu {
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s ease;
        }

        .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        /* Fade Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(5px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade {
            animation: fadeIn .18s ease-out;
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Mobile Sub-menu Animation */
        .mobile-submenu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-in-out;
        }

        .mobile-submenu.active {
            max-height: 300px;
        }
    </style>
    <script src="//unpkg.com/alpinejs" defer></script>

</head>

<body class="bg-white text-gray-900 font-sans antialiased">

    <!-- Main Navbar -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16 sm:h-20">

                <!-- Logo & Brand -->
                <div class="flex items-center flex-shrink-0">
                    <a href="/"><img src="{{ asset('assets/images/logo.png') }}" alt="Logo Damkar"
                        class="h-10 w-10 sm:h-14 sm:w-14 mr-2 sm:mr-4"></a>
                    <div class="hidden sm:block">
                        <span class="text-base sm:text-xl font-bold  block leading-tight">Pemadam Kebakaran
                            Kota Bogor</span>
                        <span class="text-xs text-gray-600">Siap Melindungi, Siap Melayani</span>
                    </div>
                    <div class="block sm:hidden">
                        <span class="text-sm font-bold text-red-600 block leading-tight">Damkar Kota Bogor</span>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-1">
                    <a href="/"
                        class="nav-link px-3 xl:px-4 py-2 text-sm xl:text-base text-gray-700 hover:text-red-600 font-medium @if (request()->is('/')) text-red-600 active @endif">
                        Beranda
                    </a>

                    <!-- PROFIL DROPDOWN -->
                    <div x-data="{ open: false }" class="relative">

                        <button @click="open = !open" @click.outside="open = false"
                            class="flex items-center gap-2 px-4 py-2
               text-sm xl:text-base font-semibold
               text-gray-800 hover:text-red-700
               transition
               @if (request()->is('profil*')) text-red-700 @endif">

                            Profil

                            <svg class="w-4 h-4 transition-transform duration-200" :class="open ? 'rotate-180' : ''"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                        </button>

                        <!-- MENU -->
                        <div x-show="open" x-transition
                            class="absolute left-0 mt-3 w-64
                bg-white border border-gray-200
                shadow-md rounded-lg
                overflow-hidden z-50">

                            <a href="/profil/kepala-dinas"
                                class="flex items-center px-5 py-3 text-gray-700
                  border-l-4 border-transparent
                  hover:bg-gray-50 hover:border-red-600 hover:text-red-700">
                                Kepala Dinas
                            </a>

                            <a href="/profil/sejarah"
                                class="flex items-center px-5 py-3 text-gray-700
                  border-l-4 border-transparent
                  hover:bg-gray-50 hover:border-red-600 hover:text-red-700">
                                Sejarah
                            </a>

                            <a href="/profil/visi-misi"
                                class="flex items-center px-5 py-3 text-gray-700
                  border-l-4 border-transparent
                  hover:bg-gray-50 hover:border-red-600 hover:text-red-700">
                                Visi & Misi
                            </a>

                            <a href="/profil/struktur"
                                class="flex items-center px-5 py-3 text-gray-700
                  border-l-4 border-transparent
                  hover:bg-gray-50 hover:border-red-600 hover:text-red-700">
                                Struktur Organisasi
                            </a>

                            <a href="/profil/tupoksi"
                                class="flex items-center px-5 py-3 text-gray-700
                  border-l-4 border-transparent
                  hover:bg-gray-50 hover:border-red-600 hover:text-red-700">
                                Tupoksi
                            </a>

                        </div>
                    </div>


                    <a href="/berita"
                        class="nav-link px-3 xl:px-4 py-2 text-sm xl:text-base text-gray-700 hover:text-red-600 font-medium @if (request()->is('berita*')) text-red-600 active @endif">
                        Berita
                    </a>

                    <a href="/dokumen"
                        class="nav-link px-3 xl:px-4 py-2 text-sm xl:text-base text-gray-700 hover:text-red-600 font-medium @if (request()->is('dokumen*')) text-red-600 active @endif">
                        Dokumen
                    </a>

                    <div x-data="{ open: false }" class="relative">

                        <button @click="open = !open" @click.outside="open = false"
                            class="flex items-center gap-2 px-4 py-2
               text-sm xl:text-base font-semibold
               text-gray-800 hover:text-red-700
               transition
               @if (request()->is('galeri*')) text-red-700 @endif">

                            Galeri

                            <svg class="w-4 h-4 transition-transform duration-200" :class="open ? 'rotate-180' : ''"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                        </button>

                        <!-- MENU -->
                        <div x-show="open" x-transition
                            class="absolute right-0 mt-4 w-64
            bg-white border border-gray-200
            shadow-xl rounded-xl
            overflow-hidden z-50
            animate-fade mr-2">


                            <a href="{{ route('public.galeri.foto') }}"
                                class="flex items-center px-5 py-3 text-gray-700
                  border-l-4 border-transparent
                  hover:bg-gray-50 hover:border-red-600 hover:text-red-700">
                                Galeri Foto
                            </a>

                            <a href="{{ route('public.galeri.video') }}"
                                class="flex items-center px-5 py-3 text-gray-700
                  border-l-4 border-transparent
                  hover:bg-gray-50 hover:border-red-600 hover:text-red-700">
                                Galeri Video
                            </a>
                        </div>
                    </div>

                    <a href="{{ route('kontak') }}"
                        class="nav-link px-3 xl:px-4 py-2 text-sm xl:text-base text-gray-700 hover:text-red-600 font-medium @if (request()->is('kontak*')) text-red-600 active @endif">
                        Kontak
                    </a>

                    <div x-data="{ open: false }" class="relative">

                        <button @click="open = !open" @click.outside="open = false"
                            class="flex items-center gap-2 px-4 py-2
               text-sm xl:text-base font-semibold
               text-gray-800 hover:text-red-700
               transition
               @if (request()->is('pengaduan*')) text-red-700 @endif">

                            Pengaduan

                            <svg class="w-4 h-4 transition-transform duration-200" :class="open ? 'rotate-180' : ''"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                        </button>

                        <!-- MENU -->
                        <div x-show="open" x-transition
                            class="absolute right-0 mt-4 w-64
            bg-white border border-gray-200
            shadow-xl rounded-xl
            overflow-hidden z-50
            animate-fade mr-2">


                            <a href="/pengaduan/sibadra"
                                class="flex items-center px-5 py-3 text-gray-700
                  border-l-4 border-transparent
                  hover:bg-gray-50 hover:border-red-600 hover:text-red-700">
                                Pengaduan SiBadra
                            </a>

                            <a href="/pengaduan/sp4nlapor"
                                class="flex items-center px-5 py-3 text-gray-700
                  border-l-4 border-transparent
                  hover:bg-gray-50 hover:border-red-600 hover:text-red-700">
                                Pengaduan SP4N Lapor
                            </a>
                        </div>
                    </div>


                    <!-- User Icon Dropdown -->
                    <div class="relative ml-2">
                        <button id="userIconBtn"
                            class="w-10 h-10 flex items-center justify-center rounded-full border border-red-600 text-red-600 hover:bg-red-600 hover:text-white transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 12a5 5 0 100-10 5 5 0 000 10zm-7 9a7 7 0 0114 0" />
                            </svg>
                        </button>

                        <div id="userDropdown"
                            class="hidden absolute right-0 mt-3 w-48 bg-white rounded-xl shadow-lg border border-gray-100 py-2 animate-fade">
                            @guest
                                <a href="{{ route('login') }}"
                                    class="block px-4 py-2.5 text-gray-700 hover:bg-red-50 hover:text-red-600 transition">
                                    Login
                                </a>
                            @endguest

                            @auth
                                <a href="{{ route('admin.dashboard') }}"
                                    class="block px-4 py-2.5 text-gray-700 hover:bg-red-50 hover:text-red-600 transition">
                                    Dashboard Berita
                                </a>
                                <a href="{{ route('admin.galeri.index') }}"
                                    class="block px-4 py-2.5 text-gray-700 hover:bg-red-50 hover:text-red-600 transition">
                                    Dashboard Galeri Foto
                                </a>
                                  <a href="{{ route('admin.galerivideo.index') }}"
                                    class="block px-4 py-2.5 text-gray-700 hover:bg-red-50 hover:text-red-600 transition">
                                    Dashboard Galeri Video
                                </a>
                                <a href="{{ route('admin.dokumen.index') }}"
                                    class="block px-4 py-2.5 text-gray-700 hover:bg-red-50 hover:text-red-600 transition">
                                    Dashboard Dokumen
                                </a>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="w-full text-left px-4 py-2.5 text-gray-700 hover:bg-red-50 hover:text-red-600 transition">
                                        Logout
                                    </button>
                                </form>
                            @endauth
                        </div>
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <div class="lg:hidden flex items-center space-x-3">
                    <!-- Mobile User Icon -->
                    <button id="mobileUserIconBtn"
                        class="w-9 h-9 flex items-center justify-center rounded-full border border-red-600 text-red-600 hover:bg-red-600 hover:text-white transition-all duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 12a5 5 0 100-10 5 5 0 000 10zm-7 9a7 7 0 0114 0" />
                        </svg>
                    </button>

                    <button id="mobile-menu-button" class="text-gray-700 hover:text-red-600 focus:outline-none">
                        <svg class="w-7 h-7 sm:w-8 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="mobile-menu lg:hidden bg-white border-t border-gray-200">
            <div class="px-3 py-3 space-y-1 max-h-[70vh] overflow-y-auto">
                <a href="/"
                    class="block px-4 py-2.5 text-gray-700 hover:bg-red-50 hover:text-red-600 rounded-lg font-medium text-sm @if (request()->is('/')) bg-red-50 text-red-600 @endif">
                    Beranda
                </a>

                <!-- Mobile Profil Dropdown -->
                <div>
                    <button id="mobile-profil-toggle"
                        class="w-full flex justify-between items-center px-4 py-2.5 text-gray-700 hover:bg-red-50 hover:text-red-600 rounded-lg font-medium text-sm @if (request()->is('profil*')) bg-red-50 text-red-600 @endif">
                        Profil
                        <svg class="w-5 h-5 transform transition-transform" id="mobile-profil-icon"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="mobile-profil-menu" class="mobile-submenu pl-4 mt-1 space-y-1">
                        <a href="/profil/kepala-dinas"
                            class="block px-4 py-2 text-gray-600 hover:text-red-600 rounded-lg text-sm">Kepala
                            Dinas</a>
                        <a href="/profil/sejarah"
                            class="block px-4 py-2 text-gray-600 hover:text-red-600 rounded-lg text-sm">Sejarah</a>
                        <a href="/profil/visi-misi"
                            class="block px-4 py-2 text-gray-600 hover:text-red-600 rounded-lg text-sm">Visi & Misi</a>
                        <a href="/profil/struktur"
                            class="block px-4 py-2 text-gray-600 hover:text-red-600 rounded-lg text-sm">Struktur
                            Organisasi</a>
                        <a href="/profil/tupoksi"
                            class="block px-4 py-2 text-gray-600 hover:text-red-600 rounded-lg text-sm">Tupoksi</a>
                    </div>
                </div>

                <a href="/berita"
                    class="block px-4 py-2.5 text-gray-700 hover:bg-red-50 hover:text-red-600 rounded-lg font-medium text-sm @if (request()->is('berita*')) bg-red-50 text-red-600 @endif">
                    Berita
                </a>

                <a href="/dokumen"
                    class="block px-4 py-2.5 text-gray-700 hover:bg-red-50 hover:text-red-600 rounded-lg font-medium text-sm @if (request()->is('dokumen*')) bg-red-50 text-red-600 @endif">
                    Dokumen
                </a>

                <div>
                    <button id="mobile-galeri-toggle"
                        class="w-full flex justify-between items-center px-4 py-2.5
               text-gray-700 hover:bg-red-50 hover:text-red-600
               rounded-lg font-medium text-sm
               @if (request()->is('galeri*')) bg-red-50 text-red-600 @endif">

                        Galeri

                        <svg id="mobile-galeri-icon" class="w-5 h-5 transition-transform duration-300"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div id="mobile-galeri-menu" class="hidden pl-4 mt-1 space-y-1">

                        <a href="{{ route('public.galeri.foto') }}"
                            class="block px-4 py-2 text-gray-600 hover:bg-red-50 hover:text-red-600 rounded-lg text-sm">
                           Galeri Foto
                        </a>

                        <a href="{{ route('public.galeri.video') }}"
                            class="block px-4 py-2 text-gray-600 hover:bg-red-50 hover:text-red-600 rounded-lg text-sm">
                            Galeri Video
                        </a>
                    </div>
                </div>

                <a href="/kontak"
                    class="block px-4 py-2.5 text-gray-700 hover:bg-red-50 hover:text-red-600 rounded-lg font-medium text-sm @if (request()->is('kontak*')) bg-red-50 text-red-600 @endif">
                    Kontak
                </a>

                <div>
                    <button id="mobile-pengaduan-toggle"
                        class="w-full flex justify-between items-center px-4 py-2.5
               text-gray-700 hover:bg-red-50 hover:text-red-600
               rounded-lg font-medium text-sm
               @if (request()->is('pengaduan*')) bg-red-50 text-red-600 @endif">

                        Pengaduan

                        <svg id="mobile-pengaduan-icon" class="w-5 h-5 transition-transform duration-300"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div id="mobile-pengaduan-menu" class="hidden pl-4 mt-1 space-y-1">

                        <a href="/pengaduan/sibadra"
                            class="block px-4 py-2 text-gray-600 hover:bg-red-50 hover:text-red-600 rounded-lg text-sm">
                            Pengaduan SiBadra
                        </a>

                        <a href="/pengaduan/sp4nlapor"
                            class="block px-4 py-2 text-gray-600 hover:bg-red-50 hover:text-red-600 rounded-lg text-sm">
                            SP4N Lapor
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Mobile User Dropdown -->
        <div id="mobileUserDropdown" class="hidden lg:hidden bg-gray-50 border-t border-gray-200 animate-fade">
            <div class="px-4 py-3 space-y-2">
                @guest
                    <a href="{{ route('login') }}"
                        class="block px-4 py-2.5 text-gray-700 hover:bg-red-50 hover:text-red-600 rounded-lg transition text-sm font-medium">
                        Login
                    </a>
                @endguest

                @auth
                    <a href="{{ route('admin.dashboard') }}"
                        class="block px-4 py-2.5 text-gray-700 hover:bg-red-50 hover:text-red-600 rounded-lg transition text-sm">
                        Dashboard Berita
                    </a>
                    <a href="{{ route('admin.galeri.index') }}"
                        class="block px-4 py-2.5 text-gray-700 hover:bg-red-50 hover:text-red-600 rounded-lg transition text-sm">
                        Dashboard Galeri Foto
                    </a>
                    <a href="{{ route('admin.galerivideo.index') }}"
                        class="block px-4 py-2.5 text-gray-700 hover:bg-red-50 hover:text-red-600 rounded-lg transition text-sm">
                        Dashboard Galeri Video
                    </a>
                    <a href="{{ route('admin.dokumen.index') }}"
                        class="block px-4 py-2.5 text-gray-700 hover:bg-red-50 hover:text-red-600 rounded-lg transition text-sm">
                        Dashboard Dokumen
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full text-left px-4 py-2.5 text-gray-700 hover:bg-red-50 hover:text-red-600 rounded-lg transition text-sm">
                            Logout
                        </button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-gray-900 via-gray-800 to-red-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 mb-8">

                <!-- About Section -->
                <div class="text-center sm:text-left">
                    <div class="flex items-center justify-center sm:justify-start mb-4">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo"
                            class="h-10 w-10 sm:h-12 sm:w-12 mr-3">
                        <div>
                            <h3 class="text-base sm:text-lg font-bold">Dinas Pemadam Kebakaran</h3>
                            <p class="text-xs sm:text-sm text-gray-300">Kota Bogor</p>
                        </div>
                    </div>
                    <p class="text-gray-300 text-xs sm:text-sm leading-relaxed">
                        Dinas Pemadam Kebakaran dan Penyelamatan Kota Bogor berkomitmen melindungi masyarakat dengan
                        layanan terbaik.
                    </p>
                </div>

                <!-- Quick Links -->
                <div class="text-center sm:text-left">
                    <h4 class="text-base sm:text-lg font-bold mb-3 sm:mb-4 text-yellow-400">Tautan Cepat</h4>
                    <ul class="space-y-2">
                        <li><a href="/"
                                class="text-gray-300 hover:text-yellow-400 transition flex items-center justify-center sm:justify-start text-xs sm:text-sm">
                                <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                </svg>
                                Beranda
                            </a></li>
                        <li><a href="/berita"
                                class="text-gray-300 hover:text-yellow-400 transition flex items-center justify-center sm:justify-start text-xs sm:text-sm">
                                <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                        clip-rule="evenodd" />
                                </svg>
                                Berita
                            </a></li>
                        <li><a href="/dokumen"
                                class="text-gray-300 hover:text-yellow-400 transition flex items-center justify-center sm:justify-start text-xs sm:text-sm">
                                <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                        clip-rule="evenodd" />
                                </svg>
                                Dokumen
                            </a></li>
                        <li><a href="/kontak"
                                class="text-gray-300 hover:text-yellow-400 transition flex items-center justify-center sm:justify-start text-xs sm:text-sm">
                                <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd" />
                                </svg>
                                Kontak
                            </a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="text-center sm:text-left">
                    <h4 class="text-base sm:text-lg font-bold mb-3 sm:mb-4 text-yellow-400">Layanan Kami</h4>
                    <ul class="space-y-2">
                        <li class="text-gray-300 flex items-start justify-center sm:justify-start text-xs sm:text-sm">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 text-red-400 flex-shrink-0 mt-0.5"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Pemadaman Kebakaran</span>
                        </li>
                        <li class="text-gray-300 flex items-start justify-center sm:justify-start text-xs sm:text-sm">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 text-yellow-400 flex-shrink-0 mt-0.5"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Operasi Penyelamatan</span>
                        </li>
                        <li class="text-gray-300 flex items-start justify-center sm:justify-start text-xs sm:text-sm">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 text-blue-400 flex-shrink-0 mt-0.5"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3z" />
                            </svg>
                            <span>Program Edukasi</span>
                        </li>
                        <li class="text-gray-300 flex items-start justify-center sm:justify-start text-xs sm:text-sm">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 text-green-400 flex-shrink-0 mt-0.5"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Inspeksi Keselamatan</span>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="text-center sm:text-left">
                    <h4 class="text-base sm:text-lg font-bold mb-3 sm:mb-4 text-yellow-400">Hubungi Kami</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start justify-center sm:justify-start">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 sm:mr-3 text-red-400 flex-shrink-0 mt-0.5"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-300 text-xs sm:text-sm">Jl. Raya Pajajaran No.01 raya, RT.07/RW.02,
                                Sukasari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16142</span>
                        <li class="flex items-center justify-center sm:justify-start">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 sm:mr-3 text-yellow-400 flex-shrink-0"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.518 3.09a1 1 0 01-.29.95l-1.548 1.548a11.037 11.037 0 005.292 5.292l1.548-1.548a1 1 0 01.95-.29l3.09.518a1 1 0 01.836.986V17a1 1 0 01-1 1h-1C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                            <a href="tel:+622518322100"
                                class="text-gray-300 text-xs sm:text-sm hover:text-yellow-400 transition"> (0251) 8322100</a>
                        </li>
                        <li class="flex items-center justify-center sm:justify-start">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 sm:mr-3 text-blue-400 flex-shrink-0"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M2.94 6.94a1.5 1.5 0 012.12 0L10 12.88l4.94-4.94a1.5 1.5 0 112.12 2.12l-6 6a1.5 1.5 0 01-2.12 0l-6-6a1.5 1.5 0 010-2.12z" />
                            </svg>
                            <a href="https://www.google.com/maps/place/Dinas+Pemadam+Kebakaran+Kota+Bogor/@-6.6203769,106.8158879,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69c5dca94ac645:0x814d2fadf4d257a6!8m2!3d-6.6203769!4d106.8158879!16s%2Fg%2F1pzrxp5bg?entry=ttu&g_ep=EgoyMDI1MTIwOS4wIKXMDSoKLDEwMDc5MjA3MUgBUAM%3D"
                                target="_blank"
                                class="text-gray-300 text-xs sm:text-sm hover:text-yellow-400 transition">
                                Lihat Lokasi di Google Maps
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="border-t border-gray-700 pt-6 sm:pt-8">
                <div class="text-center text-gray-400 text-xs sm:text-sm">
                    &copy; {{ date('Y') }} Dinas Pemadam Kebakaran Kota Bogor. All rights reserved.
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Desktop User Dropdown
            const userBtn = document.getElementById("userIconBtn");
            const userMenu = document.getElementById("userDropdown");

            if (userBtn && userMenu) {
                userBtn.addEventListener("click", (e) => {
                    e.stopPropagation();
                    userMenu.classList.toggle("hidden");
                });

                // Close dropdown when clicking outside
                document.addEventListener("click", function(e) {
                    if (!userBtn.contains(e.target) && !userMenu.contains(e.target)) {
                        userMenu.classList.add("hidden");
                    }
                });
            }

            // Mobile Menu Toggle
            const mobileMenuButton = document.getElementById("mobile-menu-button");
            const mobileMenu = document.getElementById("mobile-menu");

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener("click", () => {
                    mobileMenu.classList.toggle("active");
                });
            }

            // Mobile Profil Dropdown Toggle
            const profilToggle = document.getElementById("mobile-profil-toggle");
            const profilMenu = document.getElementById("mobile-profil-menu");
            const profilIcon = document.getElementById("mobile-profil-icon");

            if (profilToggle && profilMenu && profilIcon) {
                profilToggle.addEventListener("click", () => {
                    profilMenu.classList.toggle("active");
                    profilIcon.classList.toggle("rotate-180");
                });
            }

            // Mobile Pengaduan Dropdown Toggle
            const pengaduanToggle = document.getElementById("mobile-pengaduan-toggle");
            const pengaduanMenu = document.getElementById("mobile-pengaduan-menu");
            const pengaduanIcon = document.getElementById("mobile-pengaduan-icon");

            if (pengaduanToggle && pengaduanMenu && pengaduanIcon) {
                pengaduanToggle.addEventListener("click", () => {
                    pengaduanMenu.classList.toggle("hidden");
                    pengaduanIcon.classList.toggle("rotate-180");
                });
            }

            // Mobile Pengaduan Dropdown Toggle
            const galeriToggle = document.getElementById("mobile-galeri-toggle");
            const galeriMenu = document.getElementById("mobile-galeri-menu");
            const galeriIcon = document.getElementById("mobile-galeri-icon");

            if (galeriToggle && galeriMenu && galeriIcon) {
                galeriToggle.addEventListener("click", () => {
                    galeriMenu.classList.toggle("hidden");
                    galeriIcon.classList.toggle("rotate-180");
                });
            }

            // Mobile User Dropdown
            const mobileUserBtn = document.getElementById("mobileUserIconBtn");
            const mobileUserMenu = document.getElementById("mobileUserDropdown");

            if (mobileUserBtn && mobileUserMenu) {
                mobileUserBtn.addEventListener("click", (e) => {
                    e.stopPropagation();
                    mobileUserMenu.classList.toggle("hidden");

                    // Close mobile menu if open
                    if (mobileMenu) {
                        mobileMenu.classList.remove("active");
                    }
                });

                // Close mobile user dropdown when clicking outside
                document.addEventListener("click", function(e) {
                    if (!mobileUserBtn.contains(e.target) && !mobileUserMenu.contains(e.target)) {
                        mobileUserMenu.classList.add("hidden");
                    }
                });
            }

            // Close mobile menus when window is resized to desktop
            window.addEventListener("resize", function() {
                if (window.innerWidth >= 1024) {
                    if (mobileMenu) mobileMenu.classList.remove("active");
                    if (mobileUserMenu) mobileUserMenu.classList.add("hidden");
                }
            });
        });
    </script>
</body>

</html>
