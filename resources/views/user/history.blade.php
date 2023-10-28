@extends('user.layouts.main')

@section('title', 'History')

@section('content')
    <div class="p-10">
        <div class="ms-2 mb-3">
            <input type="text"
                class="shadow-md md:px-10 p-3 outline-none border border-gray-300 rounded-md text-sm focus:border-blue-500"
                placeholder="Search by code..." name="query" id="searchInputBookTitle" value="{{ request('query') }}">
        </div>
        <div class="mb-2">
            @if (session('success'))
                <div class="mt-2 bg-green-200 text-green-700 p-2 rounded">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="mt-2 bg-red-200 text-red-700 p-2 rounded">
                    {{ session('error') }}
                </div>
            @endif
        </div>
        <div class="ms-5 mt-5 ">
            <span class="font-medium text-xl">Borrowed</span>
            <div class=" mt-2">
                <div class="grid grid-cols-1 md:grid-cols-6 p-2 gap-3">
                    @if ($datas)
                        @forelse ($datas as $data)
                            <div
                                class="rounded-lg border border-gray-600 p-3 shadow-md hover:shadow-xl hover:bg-blue-200 transition">
                                <div class="flex justify-center">
                                    <img src="{{ url($data->book->image) }}" class="rounded-lg">
                                </div>
                                <div class="text-center mt-2">
                                    <span class="font-medium">{{ $data->book->title }}</span><br>
                                    <span class="">Author: {{ $data->book->author }}</span><br>
                                    <span class="">Published: {{ $data->book->published }}</span><br>
                                    <span class="">Borrow Code: {{ $data->borrow_code }}</span><br>
                                    <div class="my-2">
                                        @if ($data->status === 'Dipinjam')
                                            <form action="{{ route('user.return', ['id' => $data->id]) }}" method="POST"
                                                id="returnForm">
                                                @csrf
                                                @method('PUT')
                                                <select name="status"
                                                    class="px-2 py-1 rounded-full bg-blue-500 text-white outline-none"
                                                    id="statusSelect">
                                                    <option value="Dipinjam"
                                                        @if ($data->status === 'Dipinjam') selected @endif>Dipinjam
                                                    </option>
                                                    <option value="Dikembalikan"
                                                        @if ($data->status === 'Dikembalikan') selected @endif>Kembalikan
                                                    </option>
                                                    <option value="Terlambat"
                                                        @if ($data->status === 'Terlambat') selected @endif>Terlambat</option>
                                                    <option value="Hilang"
                                                        @if ($data->status === 'Hilang') selected @endif>Hilang</option>
                                                    <option value="Rusak"
                                                        @if ($data->status === 'Rusak') selected @endif>Rusak</option>
                                                </select>
                                            </form>
                                        @else
                                            <span
                                                class="px-2 py-1 rounded-full
                                        @if ($data->status === 'Dipinjam') bg-blue-500 text-white
                                        @elseif ($data->status === 'Dikembalikan')
                                            bg-green-500 text-white
                                        @elseif ($data->status === 'Terlambat')
                                            bg-orange-500 text-white
                                        @elseif ($data->status === 'Hilang')
                                            bg-red-500 text-white
                                        @elseif ($data->status === 'Rusak')
                                            bg-purple-500 text-white @endif">
                                                {{ $data->status }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @empty
                            <span class="text-center col-span-6 text-gray-600">Data tidak tersedia.</span>
                        @endforelse
                    @else
                        <p>Belum ada data peminjaman.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
