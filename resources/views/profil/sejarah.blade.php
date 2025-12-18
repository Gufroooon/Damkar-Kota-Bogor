@extends('layouts.app')

@section('title', 'Sejarah - Damkar Kota Bogor')

@section('content')
<style>
    @keyframes slideInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    .animate-slide-in {
        animation: slideInUp 0.8s ease-out forwards;
    }

    .animate-fade-in {
        animation: fadeIn 1s ease-out forwards;
    }

    .gradient-text {
        background: linear-gradient(135deg, #FCD34D 0%, #EF4444 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .timeline-dot {
        background: linear-gradient(135deg, #EF4444, #B91C1C);
    }
</style>

<!-- HEADER -->
<section class="relative bg-gradient-to-br from-red-600 via-red-700 to-gray-900 text-white py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-20 w-72 h-72 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-red-400 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 relative z-10 text-center animate-slide-in">
        <div class="inline-flex items-center gap-2 bg-white/10 px-4 py-2 rounded-full mb-6 border border-white/20">
            <span class="text-sm font-semibold">Profil Organisasi</span>
        </div>

        <h1 class="text-5xl lg:text-7xl font-bold mb-6">
            Sejarah <span class="gradient-text">Damkar Kota Bogor</span>
        </h1>

        <p class="text-xl text-gray-200 max-w-3xl mx-auto">
            Perjalanan panjang pembentukan dan pengabdian
            Dinas Pemadam Kebakaran dan Penyelamatan Kota Bogor
        </p>
    </div>
</section>

<!-- KONTEN SEJARAH -->
<section class="py-20 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">

        <!-- NARASI UTAMA -->
        <div class="bg-white rounded-3xl shadow-2xl p-10 md:p-14 mb-20 animate-slide-in">
            <h2 class="text-4xl font-bold text-gray-900 mb-6 text-center">
                Latar Belakang Sejarah
            </h2>

            <div class="space-y-5 text-gray-700 leading-relaxed text-justify">
                <p>
                    Keberadaan Dinas Pemadam Kebakaran dan Penyelamatan Kota Bogor
                    tidak terlepas dari kebutuhan akan perlindungan keselamatan masyarakat
                    terhadap bahaya kebakaran dan kondisi darurat lainnya.
                </p>

                <p>
                    Sejarah pemadam kebakaran di Indonesia bermula sejak masa
                    pemerintahan kolonial Hindia Belanda melalui pembentukan organisasi
                    <em>Brandweer</em>, yang menjadi dasar sistem pemadam kebakaran modern.
                </p>

                <p>
                    Seiring pertumbuhan Kota Bogor sebagai kawasan perkotaan,
                    Pemerintah Daerah memandang perlu adanya organisasi pemadam kebakaran
                    yang terstruktur, profesional, dan siap siaga melayani masyarakat.
                </p>

                <p>
                    Saat ini, Damkar Kota Bogor tidak hanya berfokus pada pemadaman kebakaran,
                    tetapi juga menjalankan fungsi penyelamatan, evakuasi,
                    serta penanganan kondisi darurat secara terpadu dan humanis.
                </p>
            </div>
        </div>

        <!-- TIMELINE -->
        <div class="animate-fade-in">
            <h2 class="text-4xl font-bold text-center mb-14">
                Timeline Perkembangan
            </h2>

            <div class="relative border-l-4 border-red-600 pl-10 space-y-14">

                <!-- ITEM -->
                <div class="relative">
                    <span class="absolute -left-[30px] w-6 h-6 rounded-full timeline-dot"></span>
                    <h3 class="text-xl font-bold text-gray-900">
                        1873 – Awal Pemadam Kebakaran di Indonesia
                    </h3>
                    <p class="text-gray-700 mt-2 leading-relaxed">
                        Pemerintah kolonial Hindia Belanda membentuk organisasi pemadam
                        kebakaran (<em>Brandweer</em>) di kota-kota besar sebagai sistem
                        penanggulangan kebakaran terorganisir.
                    </p>
                </div>

                <!-- ITEM -->
                <div class="relative">
                    <span class="absolute -left-[30px] w-6 h-6 rounded-full timeline-dot"></span>
                    <h3 class="text-xl font-bold text-gray-900">
                        1950–1970 – Penyesuaian Pasca Kemerdekaan
                    </h3>
                    <p class="text-gray-700 mt-2 leading-relaxed">
                        Setelah kemerdekaan Republik Indonesia,
                        organisasi pemadam kebakaran disesuaikan
                        dengan sistem pemerintahan daerah.
                    </p>
                </div>

                <!-- ITEM -->
                <div class="relative">
                    <span class="absolute -left-[30px] w-6 h-6 rounded-full timeline-dot"></span>
                    <h3 class="text-xl font-bold text-gray-900">
                        1975 – Pembentukan Damkar Kota Bogor
                    </h3>
                    <p class="text-gray-700 mt-2 leading-relaxed">
                        Dinas Pemadam Kebakaran Kota Bogor dibentuk
                        secara resmi sebagai perangkat daerah yang
                        bertanggung jawab terhadap penanggulangan kebakaran.
                    </p>
                </div>

                <!-- ITEM -->
                <div class="relative">
                    <span class="absolute -left-[30px] w-6 h-6 rounded-full timeline-dot"></span>
                    <h3 class="text-xl font-bold text-gray-900">
                        2000–2015 – Modernisasi & Pengembangan
                    </h3>
                    <p class="text-gray-700 mt-2 leading-relaxed">
                        Peningkatan kapasitas sumber daya manusia,
                        modernisasi peralatan, serta pengembangan
                        layanan penyelamatan mulai diterapkan secara bertahap.
                    </p>
                </div>

                <!-- ITEM -->
                <div class="relative">
                    <span class="absolute -left-[30px] w-6 h-6 rounded-full timeline-dot"></span>
                    <h3 class="text-xl font-bold text-gray-900">
                        Saat Ini – Pelayanan Profesional & Humanis
                    </h3>
                    <p class="text-gray-700 mt-2 leading-relaxed">
                        Damkar Kota Bogor berkomitmen memberikan pelayanan
                        cepat, profesional, dan humanis demi keselamatan
                        masyarakat Kota Bogor.
                    </p>
                </div>

            </div>
        </div>

    </div>
</section>
@endsection
