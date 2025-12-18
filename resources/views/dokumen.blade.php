@extends('layouts.app')

@section('title', 'Dokumen Publik - Damkar Kota Bogor')

@section('content')
<style>
    @keyframes slideInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-slide-in {
        animation: slideInUp 0.6s ease-out forwards;
    }
    .gradient-text {
        background: linear-gradient(135deg, #FCD34D 0%, #EF4444 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    /* PDF Link Effect */
.pdf-link {
    position: relative;
    font-weight: 600;
    color: #DC2626; /* red-600 */
    transition: color 0.3s ease;
}

.pdf-link::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 0;
    height: 2px;
    background: linear-gradient(90deg, #EF4444, #FCD34D);
    transition: width 0.3s ease;
}

.pdf-link:hover {
    color: #B91C1C; /* red-700 */
}

.pdf-link:hover::after {
    width: 100%;
}

</style>

<!-- HEADER -->
<section class="relative bg-gradient-to-br from-red-600 via-red-700 to-gray-900 text-white py-24 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-20 w-72 h-72 bg-yellow-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-red-400 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 text-center relative z-10 animate-slide-in">
        <h1 class="text-5xl font-bold mb-6">
            Dokumen Dinas Pemadam  <span class="gradient-text">Kebakaran dan Penyelamatan Kota Bogor</span>
        </h1>
        <p class="text-xl text-gray-200 max-w-3xl mx-auto">
            Dokumen resmi Dinas Pemadam Kebakaran dan Penyelamatan Kota Bogor
        </p>
    </div>
</section>



<!-- TABEL DOKUMEN -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">

        <div class="bg-white rounded-2xl shadow-lg overflow-hidden animate-slide-in">
            <!-- TABLE HEADER -->
<div class="px-6 py-5 border-b bg-gray-50">
    <form method="GET" action="{{ url('/dokumen') }}">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">

            <!-- LEFT -->
            <div>
                <h2 class="text-lg font-semibold text-gray-800">
                    Daftar Dokumen Publik
                </h2>
                @if(request('search'))
                    <p class="text-sm text-gray-500 mt-1">
                        Hasil pencarian: 
                        <span class="font-medium text-red-600">
                            "{{ request('search') }}"
                        </span>
                    </p>
                @endif
            </div>

            <!-- RIGHT -->
            <div class="flex gap-2 w-full md:w-auto">
                <input type="text"
                       name="search"
                       value="{{ request('search') }}"
                       placeholder="Cari dokumen..."
                       class="w-full md:w-64 border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-red-400 focus:outline-none">

                <button
                    class="px-5 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                    Cari
                </button>

                @if(request('search'))
                    <a href="{{ url('/dokumen') }}"
                       class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
                        Reset
                    </a>
                @endif
            </div>

        </div>
    </form>
</div>

            <!-- TABLE DESKTOP -->
<div class="overflow-x-auto hidden md:block">
    <table class="w-full min-w-[900px]">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">No</th>
                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Nama Dokumen</th>
                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Kategori</th>
                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Keterangan</th>
                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">File</th>
            </tr>
        </thead>

        <tbody class="divide-y">
            @forelse ($dokumen as $index => $d)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">
                        {{ $dokumen->firstItem() + $index }}
                    </td>

                    <td class="px-6 py-4 font-medium text-gray-800 break-words">
                        {{ $d->nama_dokumen }}
                    </td>

                    <td class="px-6 py-4">
                        <span class="inline-block bg-red-100 text-red-700 text-sm px-3 py-1 rounded-full">
                            {{ $d->kategori->nama_kategori ?? '-' }}
                        </span>
                    </td>

                    <td class="px-6 py-4 max-w-md break-words text-gray-600">
                        {{ $d->keterangan ?? '-' }}
                    </td>

                    <td class="px-6 py-4">
                        <a href="{{ asset('storage/'.$d->file) }}" target="_blank" class="pdf-link">
                            Lihat Dokumen (PDF)
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center py-10 text-gray-500">
                        Belum ada dokumen tersedia.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<!-- CARD MOBILE -->
<div class="md:hidden space-y-4">
    @forelse ($dokumen as $index => $d)
        <div class="bg-white rounded-xl shadow p-4">

            <div class="flex justify-between items-center mb-2">
                <span class="bg-red-100 text-red-700 text-xs px-3 py-1 rounded-full">
                    {{ $d->kategori->nama_kategori ?? '-' }}
                </span>
            </div>

            <h3 class="font-semibold text-gray-800 mb-1 break-all">
                {{ $d->nama_dokumen }}
            </h3>

            <p class="text-sm text-gray-600 mb-3 break-words">
                {{ $d->keterangan ?? '-' }}
            </p>

            <a href="{{ asset('storage/'.$d->file) }}"
               target="_blank"
               class="inline-block text-red-600 font-semibold text-sm">
                 Lihat Dokumen (PDF)
            </a>
        </div>
    @empty
        <div class="text-center text-gray-500 py-10">
            Belum ada dokumen tersedia.
        </div>
    @endforelse
</div>


        </div>

        <!-- PAGINATION -->
        <div class="mt-12 flex justify-center">
            {{ $dokumen->links('pagination::tailwind') }}
        </div>

    </div>
</section>
@endsection
