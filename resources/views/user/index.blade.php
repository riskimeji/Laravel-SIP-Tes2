@extends('user.layouts.main')
@section('title', 'Beranda')

@section('content')
    <div class="p-10">
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
        <div class="flex justify-center mx-5">
            <img src="https://img.freepik.com/premium-vector/banner-with-hand-drawing-sketch-books-concept-vintage-design-fair-festival-flyer-paper-banner-school-library-retro-poster-bookshop-advertising-engraving-style_190776-1812.jpg?w=2000"
                class=" md:block hidden border border-gray-600 shadow-md rounded-lg w-full h-[400px] object-cover"
                alt="Banner">
        </div>
        <div class="md:ms-5 mt-5 ">
            <span class="font-medium text-xl">Recently Added</span>
            <div class=" mt-2">
                <div class="grid grid-cols-1 md:grid-cols-6 p-2 gap-3">
                    @foreach ($books->take(6) as $book)
                        <div
                            class="rounded-lg border border-gray-600 p-3 shadow-md hover:shadow-xl hover:bg-blue-200 transition">
                            <a href="/book/detail/{{ $book->slug }}">
                                <div class="flex justify-center">
                                    <img src="{{ $book->image }}" class="rounded-lg">
                                </div>
                            </a>
                            <div class="text-center mt-2">
                                <span class="font-medium">{{ $book->title }}</span><br>
                                <span class="">Penulis: {{ $book->author }}</span><br>
                                <span class="">Published: {{ $book->published }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="ms-5 mt-5 ">
            <span class="font-medium text-xl">Books</span>
            <div class=" mt-2">
                <div class="grid grid-cols-1 md:grid-cols-6 p-2 gap-3">
                    @foreach ($books->take(12) as $book)
                        <div
                            class="rounded-lg border border-gray-600 p-3 shadow-md hover:shadow-xl hover:bg-blue-400 transition">
                            <a href="/book/detail/{{ $book->slug }}">
                                <div class="flex justify-center">
                                    <img src="{{ $book->image }}" class="rounded-lg">
                                </div>
                            </a>
                            <div class="text-center mt-2">
                                <span class="font-medium">{{ $book->title }}</span><br>
                                <span class="">Penulis: {{ $book->author }}</span><br>
                                <span class="">Published: {{ $book->published }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="mt-2 flex items-center justify-center">
                <a href="/books">
                    <button
                        class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec] mx-auto">More...</button>
                </a>
            </div>
        </div>
    </div>
@endsection
