@extends('user.layouts.main')

@section('title', 'Book')

@section('content')
    <div class="p-10">
        <div class="ms-2 mb-3">
            <input type="text"
                class="shadow-md md:px-10 p-3 outline-none border border-gray-300 rounded-md text-sm focus:border-blue-500"
                placeholder="Search by title..." name="query" id="searchInputBookMember" value="{{ request('query') }}">
        </div>
        <div class="grid grid-cols-1 md:grid-cols-6 p-2 gap-3">
            @forelse ($books->take(12) as $book)
                <div class="rounded-lg border border-gray-600 p-3 shadow-md hover:shadow-xl hover:bg-blue-200 transition">
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
            @empty
                <span class="text-center col-span-6 text-gray-600">Tidak ada buku tersedia.</span>
            @endforelse
        </div>
        <div class="mt-2">
            {{ $books->links('pagination::simple-tailwind') }}
        </div>
    </div>
@endsection
