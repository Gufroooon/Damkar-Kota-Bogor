@extends('layouts.app')

@section('title', 'Visi & Misi - Damkar Kota Bogor')

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
            Visi & <span class="gradient-text">Misi</span>
        </h1>
        <p class="text-xl text-gray-200 max-w-3xl mx-auto">
            Dinas Pemadam Kebakaran dan Penyelamatan Kota Bogor
        </p>
    </div>
</section>

<!-- KONTEN VISI MISI -->
<section class="py-20 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- VISI -->
        <div class="bg-white rounded-2xl shadow-lg p-8 mb-16 animate-slide-in">
            <h2 class="text-3xl font-bold mb-6 text-gray-900 text-center">
                Visi
            </h2>

            <blockquote class="text-xl md:text-2xl font-semibold text-center text-gray-800 leading-relaxed">
                “Terwujudnya pelayanan pemadam kebakaran dan penyelamatan yang profesional,
                responsif, dan humanis guna mendukung Kota Bogor yang aman, tangguh,
                dan berkelanjutan.”
            </blockquote>
        </div>

        <!-- MISI -->
        <div class="bg-white rounded-2xl shadow-lg p-8 animate-slide-in">
            <h2 class="text-3xl font-bold mb-8 text-gray-900 text-center">
                Misi
            </h2>

            <ol class="space-y-6 text-gray-700 leading-relaxed list-decimal list-inside">
                <li>
                    Meningkatkan kualitas pelayanan pemadam kebakaran dan penyelamatan melalui
                    respons cepat, penanganan yang tepat, serta penerapan standar operasional
                    yang profesional dan berorientasi pada keselamatan masyarakat.
                </li>

                <li>
                    Memperkuat upaya pencegahan dan mitigasi kebakaran dengan meningkatkan edukasi,
                    sosialisasi, serta partisipasi aktif masyarakat dalam pencegahan kebakaran
                    dan kesiapsiagaan bencana.
                </li>

                <li>
                    Mengembangkan kapasitas sumber daya manusia serta sarana dan prasarana guna
                    mendukung kesiapsiagaan personel, modernisasi peralatan, dan peningkatan
                    kompetensi aparatur pemadam kebakaran dan penyelamatan.
                </li>

                <li>
                    Meningkatkan koordinasi dan sinergi lintas sektor dengan perangkat daerah,
                    instansi terkait, serta masyarakat dalam penanggulangan kebakaran dan
                    penanganan kondisi darurat.
                </li>

                <li>
                    Mewujudkan tata kelola pelayanan yang transparan, akuntabel, dan berorientasi
                    pada kepuasan masyarakat sebagai bagian dari penyelenggaraan pemerintahan
                    yang baik.
                </li>
            </ol>
        </div>

    </div>
</section>
@endsection
