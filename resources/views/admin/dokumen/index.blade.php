@extends('layouts.app')

@section('title', 'Kelola Dokumen')

@section('content')
<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4 space-y-10">

        <!-- HEADER -->
<div class="bg-white rounded-xl shadow-lg p-6 flex justify-between items-center">
    <h1 class="text-3xl font-bold text-gray-900">Manajemen Dokumen</h1>

    <a href="{{ route('admin.dokumen.create') }}"
       class="bg-red-600 text-white px-5 py-3 rounded-lg shadow hover:bg-red-700 transition">
        + Tambah Dokumen
    </a>
</div>


        <!-- TAMBAH KATEGORI -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Kategori Dokumen</h2>

            <form action="{{ url('/admin/kategori-dokumen') }}" method="POST" class="flex gap-4 mb-6">
                @csrf
                <input type="text" name="nama_kategori"
                       class="w-full border rounded-lg px-4 py-2"
                       placeholder="Nama kategori (contoh: Umum, RENJA, SOP)"
                       required>
                <button class="bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700">
                    Tambah
                </button>
            </form>

            <div class="flex flex-wrap gap-3">
                @forelse ($kategori as $k)
                    <div class="flex items-center gap-3 bg-gray-100 px-4 py-2 rounded-lg">
                        <span class="font-medium text-gray-800">{{ $k->nama_kategori }}</span>

                        <form action="{{ url('/admin/kategori-dokumen/'.$k->id) }}"
                              method="POST"
                              onsubmit="return confirm('Hapus kategori ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 text-sm hover:underline">
                                Hapus
                            </button>
                        </form>
                    </div>
                @empty
                    <p class="text-gray-500">Belum ada kategori.</p>
                @endforelse
            </div>
        </div>


        <!-- LIST DOKUMEN -->
        <div class="bg-white rounded-xl shadow-lg">
            <div class="overflow-x-auto">
                <table class="w-full min-w-[900px]">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left">Nama Dokumen</th>
                            <th class="px-6 py-3 text-left">Kategori</th>
                            <th class="px-6 py-3 text-left">Keterangan</th>
                            <th class="px-6 py-3 text-left">File</th>
                            <th class="px-6 py-3 text-left">Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y">
                        @forelse ($dokumen as $d)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium">
                                    {{ $d->nama_dokumen }}
                                </td>

                                <td class="px-6 py-4">
                                    {{ $d->kategori->nama_kategori ?? '-' }}
                                </td>

                                <td class="px-6 py-4 max-w-sm break-words">
                                    {{ $d->keterangan ?? '-' }}
                                </td>

                                <td class="px-6 py-4">
    <a href="{{ asset('storage/'.$d->file) }}"
       target="_blank"
       class="text-blue-600 hover:underline">
        Lihat PDF
    </a>
</td>


                              <td class="px-6 py-4">
    <div class="flex items-center gap-2">

        {{-- EDIT --}}
        <a href="{{ route('admin.dokumen.edit', $d->id) }}"
           class="px-3 py-1 bg-yellow-500 text-white text-sm rounded hover:bg-yellow-600 transition">
            Edit
        </a>

        {{-- HAPUS --}}
        <form action="{{ route('admin.dokumen.destroy', $d->id) }}"
              method="POST"
              onsubmit="return confirm('Hapus dokumen ini?')">
            @csrf
            @method('DELETE')

            <button
                type="submit"
                class="px-3 py-1 bg-red-600 text-white text-sm rounded hover:bg-red-700 transition">
                Hapus
            </button>
        </form>

    </div>
</td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-10 text-gray-500">
                                    Belum ada dokumen.
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
