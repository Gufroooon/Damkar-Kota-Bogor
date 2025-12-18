    @extends('layouts.app')

    @section('title', 'Kelola Galeri')

    @section('content')
        <div class="min-h-screen bg-gray-50 py-12">
            <div class="max-w-7xl mx-auto px-4">

                <div class="bg-white rounded-xl shadow-lg p-6 mb-8 flex justify-between items-center">
                    <h1 class="text-3xl font-bold text-gray-900">Daftar Galeri</h1>

                    <a href="{{ route('admin.galeri.create') }}"
                        class="bg-red-600 text-white px-5 py-3 rounded-lg shadow hover:bg-red-700">
                        + Tambah galeri
                    </a>
                </div>

                <div class="bg-white rounded-xl shadow-lg">
    <div class="overflow-x-auto">
        <table class="w-full min-w-[700px]">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left whitespace-nowrap">Judul</th>
                    <th class="px-6 py-3 text-left whitespace-nowrap">Gambar</th>
                    <th class="px-6 py-3 text-left whitespace-nowrap">Tanggal</th>
                    <th class="px-6 py-3 text-left whitespace-nowrap">Aksi</th>
                </tr>
            </thead>

            <tbody class="divide-y bg-white">
                @forelse ($galeri as $item)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium">
                            {{ $item->judul }}
                        </td>

                        <td class="px-6 py-4">
                            @php
                                $count = $item->images->count();
                                $first = $item->images->first();
                            @endphp

                            @if ($count > 0)
                                <div class="relative inline-block">
                                    <img src="{{ asset($first->file_path) }}"
                                         class="h-16 w-16 rounded object-cover border">

                                    @if ($count > 1)
                                        <span class="absolute bottom-0 right-0 bg-black/70 text-white 
                                                     text-xs px-2 py-0.5 rounded-full">
                                            +{{ $count - 1 }}
                                        </span>
                                    @endif
                                </div>
                            @else
                                <span class="text-gray-400">-</span>
                            @endif
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $item->created_at->format('d M Y') }}
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <div class="flex gap-3">
                                <a href="{{ route('admin.galeri.edit', $item->id) }}"
                                   class="text-blue-600 hover:underline">
                                    Edit
                                </a>

                                <form action="{{ route('admin.galeri.destroy', $item->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Hapus galeri ini?')">
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
                            Belum ada galeri.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>


            </div>
        </div>
    @endsection
