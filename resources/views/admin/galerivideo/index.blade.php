@extends('layouts.app')

@section('title', 'Kelola Galeri Video')

@section('content')
<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4">

        <!-- HEADER -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-gray-900">Daftar Galeri Video</h1>

            <a href="{{ route('admin.galerivideo.create') }}"
               class="bg-red-600 text-white px-5 py-3 rounded-lg shadow hover:bg-red-700">
                + Tambah Video
            </a>
        </div>

        <!-- TABLE -->
        <div class="bg-white rounded-xl shadow-lg">
            <div class="overflow-x-auto">
                <table class="w-full min-w-[700px]">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left whitespace-nowrap">Judul</th>
                            <th class="px-6 py-3 text-left whitespace-nowrap">Preview</th>
                            <th class="px-6 py-3 text-left whitespace-nowrap">Tanggal</th>
                            <th class="px-6 py-3 text-left whitespace-nowrap">Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y bg-white">
                        @forelse ($videos as $item)
                            <tr class="hover:bg-gray-50">

                                <!-- JUDUL -->
                                <td class="px-6 py-4 font-medium">
                                    {{ $item->judul }}
                                </td>

                                <!-- PREVIEW -->
                                <td class="px-6 py-4">
                                    <button
    onclick="openVideoModal('{{ $item->url_video }}')"
    class="text-green-600 hover:underline">
    Lihat Video
</button>


                                </td>

                                <!-- TANGGAL -->
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $item->created_at->format('d M Y') }}
                                </td>

                                <!-- AKSI -->
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    <div class="flex gap-3">
                                        <a href="{{ route('admin.galerivideo.edit', $item->id) }}"
                                           class="text-blue-600 hover:underline">
                                            Edit
                                        </a>

                                        <form action="{{ route('admin.galerivideo.destroy', $item->id) }}"
                                              method="POST"
                                              onsubmit="return confirm('Hapus video ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-red-600 hover:underline">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-10 text-gray-500">
                                    Belum ada video.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
   <!-- MODAL VIDEO -->
<div id="videoModal"
     class="fixed inset-0 bg-black/70 hidden items-center justify-center z-50">

    <div class="bg-white rounded-xl w-full max-w-3xl mx-4 relative">

        <!-- CLOSE -->
        <button onclick="closeVideoModal()"
                class="absolute -top-3 -right-3 bg-red-600 text-white
                       w-8 h-8 rounded-full font-bold">
            ✕
        </button>

        <!-- VIDEO -->
        <div class="aspect-video rounded-b-xl overflow-hidden">
            <iframe id="videoFrame"
                    class="w-full h-full"
                    src=""
                    frameborder="0"
                    allowfullscreen>
            </iframe>
        </div>

    </div>
</div>


            </div>
        </div>

    </div>
</div>

<script async src="https://www.instagram.com/embed.js"></script>
<script async src="https://www.tiktok.com/embed.js"></script>

<script>
    function openVideoModal(url) {
        document.getElementById('videoFrame').src = url;
        document.getElementById('videoModal').classList.remove('hidden');
        document.getElementById('videoModal').classList.add('flex');
    }

    function closeVideoModal() {
        document.getElementById('videoFrame').src = '';
        document.getElementById('videoModal').classList.add('hidden');
        document.getElementById('videoModal').classList.remove('flex');
    }
</script>


@endsection
