@extends('petugas.layouts.main')
@section('title', 'Data Borrowed')

@section('content')
    <div class="p-10">
        <div class="bg-gray-200 rounded-md p-3 border border-gray-400 shadow-md">
            <a href="/staff"><span class="text-gray-400 hover:text-gray-600">Home</span></a>
            <span> > </span>
            <span class="text-gray-600">Borrowed ({{ $counts }})</span>
        </div>

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
        <div class="mt-5 md:ms-2 mb-3">
            <input type="text"
                class="shadow-md p-3 outline-none border border-gray-100 rounded-md text-sm focus:border-blue-500"
                placeholder="Search by code..." name="query" id="searchInputBoroowed" value="{{ request('query') }}">
        </div>
        <div class="md:ms-5 mt-5">
            <div class="mt-2">
                <div class="overflow-x-auto">
                    <table class="w-full md:w-max md:min-w-full">
                        <thead>
                            <tr class="bg-blue-500 text-white">
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Code</th>
                                <th class="px-4 py-2">Title Book</th>
                                <th class="px-4 py-2">Borrowed Name</th>
                                <th class="px-4 py-2">Status</th>
                                <th class="px-4 py-2">Borrow/Return</th>
                                <th class="px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                                <tr class="hover:bg-gray-100">
                                    <td class="px-4 py-2">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-2">{{ $data->borrow_code }}</td>
                                    <td class="px-4 py-2">{{ $data->book->title }}</td>
                                    <td class="px-4 py-2">{{ $data->user->name }}</td>
                                    <td class="px-4 py-2">
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
                                    </td>
                                    <td class="px-4 py-2">{{ $data->updated_at }}</td>
                                    <td class="px-4 py-2 flex justify-center gap-1">
                                        <form action="{{ route('staff.borrowed.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                class="p-1.5 mt-2 w-max h-max rounded-full border border-red-600 text-red-600 hover:bg-red-600 hover:text-white flex justify-center items-center cursor-pointer float-left">
                                                <ion-icon name="trash" class="text-xl"></ion-icon>
                                            </button>
                                        </form>
                                        <a href="{{ route('staff.borrowed.edit', ['id' => $data->id]) }}">
                                            <button
                                                class="p-1.5 mt-2 w-max h-max rounded-full border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white flex justify-center items-center cursor-pointer float-left">
                                                <ion-icon name="create" class="text-xl"></ion-icon>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @if ($datas->isEmpty())
                <div class="text-center mt-2">
                    <span class="text-center col-span-6 text-gray-600">Tidak ada data tersedia.</span>
                </div>
            @endif
        </div>
        <div class="mt-2">
            {{ $datas->links('pagination::simple-tailwind') }}
        </div>
    </div>


@endsection
