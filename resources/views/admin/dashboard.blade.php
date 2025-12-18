@extends('layouts.app')

@section('title', 'Kelola Berita')

@section('content')
<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4">

        <div class="bg-white rounded-xl shadow-lg p-6 mb-8 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-gray-900">Daftar Berita</h1>

           <a href="{{ route('admin.berita.create') }}"

               class="bg-red-600 text-white px-5 py-3 rounded-lg shadow hover:bg-red-700">
                + Tambah Berita
            </a>
        </div>

        

        <div class="bg-white rounded-xl shadow-lg">
    <div class="overflow-x-auto">
        <table class="w-full min-w-[900px]">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left whitespace-nowrap">Judul</th>
                    <th class="px-6 py-3 text-left whitespace-nowrap">Deskripsi</th>
                    <th class="px-6 py-3 text-left whitespace-nowrap">Gambar</th>
                    <th class="px-6 py-3 text-left whitespace-nowrap">Tanggal</th>
                    <th class="px-6 py-3 text-left whitespace-nowrap">Aksi</th>
                </tr>
            </thead>

            <tbody class="divide-y">
                @forelse ($berita as $item)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium">
                            {{ $item->judul }}
                        </td>

                        <td class="px-6 py-4 max-w-xs truncate text-gray-600">
                            {{ Str::limit(strip_tags($item->isi), 100) }}
                        </td>

                        <td class="px-6 py-4">
                            @if($item->gambar)
                                <img src="{{ asset('storage/'.$item->gambar) }}"
                                     class="h-12 w-12 rounded object-cover">
                            @else
                                <span class="text-gray-400">-</span>
                            @endif
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
    {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
</td>


                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex gap-3">
                                <a href="{{ route('admin.berita.edit', $item->id) }}"
                                   class="text-blue-600 hover:underline">
                                    Edit
                                </a>

                                <form action="{{ route('admin.berita.destroy', $item->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Hapus berita ini?')">
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
                        <td colspan="5" class="text-center py-10 text-gray-500">
                            Belum ada berita.
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
