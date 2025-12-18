@extends('layouts.app')

@section('title', 'Sambutan Kepala Dinas - Damkar Kota Bogor')

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

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }

            100% {
                background-position: 1000px 0;
            }
        }

        .animate-slide-in {
            animation: slideInUp 0.8s ease-out forwards;
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-out forwards;
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .gradient-text {
            background: linear-gradient(135deg, #FCD34D 0%, #F59E0B 50%, #EF4444 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .shimmer-effect {
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            background-size: 1000px 100%;
            animation: shimmer 3s infinite;
        }

        .quote-decoration::before {
            content: '"';
            font-size: 4rem;
            position: absolute;
            top: -10px;
            left: -10px;
            color: #FCD34D;
            opacity: 0.3;
            font-family: Georgia, serif;
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .decorative-line {
            position: relative;
            display: inline-block;
        }

        .decorative-line::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 60%;
            height: 3px;
            background: linear-gradient(90deg, transparent, #EF4444, transparent);
        }
    </style>

    <!-- HEADER -->
    <section class="relative bg-gradient-to-br from-red-600 via-red-700 to-gray-900 text-white py-32 overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-20 w-72 h-72 bg-yellow-400 rounded-full blur-3xl opacity-20 animate-float">
            </div>
            <div class="absolute bottom-20 right-20 w-96 h-96 bg-red-400 rounded-full blur-3xl opacity-20 animate-float"
                style="animation-delay: 1s;"></div>
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-orange-400 rounded-full blur-3xl opacity-10">
            </div>
        </div>

        <!-- Pattern Overlay -->
        <div class="absolute inset-0 opacity-5"
            style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"1\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="animate-slide-in">


                <h1 class="text-5xl lg:text-7xl font-bold mb-6 leading-tight">
                    <span class="decorative-line">Sambutan</span><br>
                    <span class="gradient-text">Kepala Dinas</span>
                </h1>
                <p class="text-xl lg:text-2xl text-gray-200 max-w-3xl mx-auto font-light">
                    Dinas Pemadam Kebakaran dan Penyelamatan Kota Bogor
                </p>
            </div>
        </div>
    </section>

    <!-- KONTEN SAMBUTAN -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden card-hover">

                <!-- Decorative Top Border -->
                <div class="h-2 bg-gradient-to-r from-red-600 via-yellow-500 to-red-600 shimmer-effect"></div>

                <div class="p-8 md:p-12 lg:p-16">

                    <!-- PROFIL KEPALA DINAS -->
                    <div class="flex flex-col lg:flex-row items-center lg:items-start gap-10 mb-12">

                        <!-- FOTO dengan Frame -->
                        <div class="relative group">
                            <div
                                class="absolute -inset-1 bg-gradient-to-r from-red-600 to-yellow-500 rounded-3xl blur opacity-25 group-hover:opacity-40 transition duration-300">
                            </div>
                            <div
                                class="relative w-48 h-48 lg:w-56 lg:h-56 rounded-3xl overflow-hidden shadow-xl ring-4 ring-white">
                                <img src="{{ asset('assets/images/kepaladinasdamkar.jpg') }}"
                                    alt="Kepala Dinas Damkar Kota Bogor"
                                    class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                            </div>
                            <!-- Badge -->
                            <div
                                class="absolute -bottom-3 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-red-600 to-red-700 text-white px-6 py-2 rounded-full shadow-lg text-sm font-bold whitespace-nowrap">
                                Kepala Dinas
                            </div>
                        </div>

                        <!-- NAMA & JABATAN dengan Info Tambahan -->
                        <div class="text-center lg:text-left mt-10 flex-1">
                            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-3">
                                Drs. Agung Prihanto
                            </h2>
                            <div
                                class="inline-block bg-gradient-to-r from-red-50 to-yellow-50 px-6 py-3 rounded-xl border-l-4 border-red-600 mb-6">
                                <p class="text-gray-700 font-semibold">
                                    Kepala Dinas Pemadam Kebakaran dan Penyelamatan<br>
                                    Kota Bogor
                                </p>
                            </div>
                        </div>

                    </div>

                    <!-- Divider -->
                    <div class="flex items-center gap-4 my-10">
                        <div class="flex-1 h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent"></div>
                        <svg class="w-8 h-8 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="flex-1 h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent"></div>
                    </div>

                    <!-- ISI SAMBUTAN dengan Typography yang Lebih Baik -->
                    <div class="text-gray-700 leading-relaxed space-y-6 max-w-4xl">

                        <p class="text-xl font-semibold text-red-700 text-center lg:text-left">
                            Assalamu'alaikum warahmatullahi wabarakatuh.
                        </p>

                        <p class="text-lg leading-loose">
                            Puji dan syukur senantiasa kita panjatkan ke hadirat Allah SWT atas segala
                            limpahan rahmat, kesehatan, dan kesempatan yang diberikan kepada kita semua.
                            Berkat karunia-Nya, masyarakat Kota Bogor dapat terus menjalani aktivitas
                            dengan aman dan penuh semangat menuju kehidupan yang lebih baik.
                        </p>

                        <p class="text-lg leading-loose">
                            Selamat datang di <span class="font-semibold text-red-700">Website Resmi Dinas Pemadam Kebakaran
                                dan Penyelamatan Kota Bogor</span>.
                            Website ini kami hadirkan sebagai media informasi dan komunikasi
                            kepada masyarakat terkait profil, program, kegiatan, serta layanan yang
                            diselenggarakan oleh Dinas Pemadam Kebakaran dan Penyelamatan Kota Bogor.
                        </p>

                        <!-- Highlight Box -->
                        <div
                            class="bg-gradient-to-r from-red-50 via-orange-50 to-yellow-50 p-6 rounded-2xl border-l-4 border-red-600 my-8">
                            <div class="flex items-start gap-4">
                                <svg class="w-6 h-6 text-red-600 flex-shrink-0 mt-1" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-lg leading-loose flex-1">
                                    Kami berharap keberadaan website ini dapat memberikan <span
                                        class="font-semibold text-red-700">manfaat nyata</span> bagi
                                    masyarakat dalam memperoleh data dan informasi yang <span
                                        class="font-semibold text-red-700">akurat, transparan,
                                        dan mudah diakses</span>, sekaligus menjadi sarana edukasi dalam meningkatkan
                                    kesadaran akan pentingnya pencegahan kebakaran dan kesiapsiagaan menghadapi
                                    kondisi darurat.
                                </p>
                            </div>
                        </div>

                        <p class="text-lg leading-loose">
                            Akhir kata, kami mengajak seluruh masyarakat untuk bersama-sama mendukung
                            upaya pencegahan kebakaran dan keselamatan lingkungan demi terwujudnya
                            <span class="font-semibold text-red-700">Kota Bogor yang aman, nyaman, dan tangguh</span>.
                        </p>

                        <p class="text-xl font-semibold text-red-700 text-center lg:text-left pt-4">
                            Wassalamu'alaikum warahmatullahi wabarakatuh.
                        </p>
                    </div>
                </div>
            </div>



        </div>
    </section>
@endsection
