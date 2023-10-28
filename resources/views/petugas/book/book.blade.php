@extends('petugas.layouts.main')
@section('title', 'Data Book')

@section('content')
    <div class="p-10">
        <div class="bg-gray-200 rounded-md p-3 border border-gray-400 shadow-md">
            <a href="/staff"><span class="text-gray-400 hover:text-gray-600">Home</span></a>
            <span>></span>
            <span class="text-gray-600">Books ({{ $counts }})</span>
        </div>
        <div class="mt-2">
            @if (session('success'))
                <div class="bg-green-200 text-green-700 p-2 rounded">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="bg-red-200 text-red-700 p-2 rounded">
                    {{ session('error') }}
                </div>
            @endif
        </div>
        <div class="md:ms-5 mt-5 ">
            <div class="mt-2 ">
                <div class="mt-5 md:ms-2 mb-3">
                    <div class="flex justify-between">
                        <a href="{{ route('staff.books.create') }}" class="w-max h-max"> <button
                                class="shadow-md hover:bg-white hover:text-blue-600 hover:border border-blue-600 transition p-3 px-4 bg-blue-600 text-white rounded-full">
                                Create
                            </button>
                        </a>
                        <input type="text"
                            class="shadow-md p-3 outline-none border border-gray-100 rounded-md text-sm focus:border-blue-500"
                            placeholder="Enter for search..." name="query" id="searchInputBooks"
                            value="{{ request('query') }}">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-6 p-2 gap-3">
                    @forelse ($books as $book)
                        <div class="border border-gray-600 p-3 shadow-md hover:bg-blue-200 rounded-md ">
                            <div class="flex justify-center">
                                <img src="{{ url($book->image) }}" class="object-cover rounded-md" alt="book image">
                            </div>
                            <div class="text-center mt-2">
                                <span class="font-medium">{{ $book->title }}</span><br>
                                <span class="">Stock: {{ $book->stock }}</span><br>
                                <div class="flex justify-center gap-2">
                                    <a href="/staff/books/{{ $book->slug }}/edit">
                                        <div
                                            class="p-1.5 mt-2 w-max h-max rounded-full border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white flex justify-center items-center cursor-pointer float-right">
                                            <ion-icon name="create" class="text-2xl"></ion-icon>
                                        </div>
                                    </a>
                                    <form action="{{ route('staff.books.destroy', $book->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            class="p-1.5 mt-2 w-max h-max rounded-full border border-red-600 text-red-600 hover:bg-red-600 hover:text-white flex justify-center items-center cursor-pointer float-left">
                                            <ion-icon name="trash" class="text-2xl"></ion-icon>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <span class="text-center col-span-6 text-gray-600">Tidak ada buku tersedia.</span>
                    @endforelse
                </div>
            </div>
        </div>
        <div class="mt-2">
            {{ $books->links('pagination::simple-tailwind') }}
        </div>
    </div>
@endsection
