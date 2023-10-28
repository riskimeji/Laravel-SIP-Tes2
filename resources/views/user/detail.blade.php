@extends('user.layouts.main')

@section('title', 'Detail Books')

@section('content')
    <div class="p-5 flex justify-center">
        <div class="p-5 border border-gray-300 w-full bg-white shadow-md">
            <div class="md:flex">
                <div class="flex justify-center">
                    <div class=""><img src="{{ url($book->image) }}" class="md:w-[400px] object-cover " alt="image">
                    </div>
                </div>
                <div class="md:mt-0 mt-2 md:ms-4">
                    <h1 class="md:mt-0 mt-1 md:text-left text-center text-xl font-medium mb-2">{{ $book->title }}</h1>
                    <span class="">Category: {{ $book->category }}</span><br>
                    <span class="">Published: {{ $book->published }}</span><br>
                    <span class="">Author: {{ $book->author }}</span><br>
                    <span class="font-medium">Stock: {{ $book->stock }}</span><br>
                    <p class="mt-2">Description: {{ $book->description }}</p>
                    <div class="mt-4 md:text-left text-center">
                        @if ($book->stock < 1)
                            <span class="text-red-600">Stok tidak tersedia</span>
                        @else
                            @if ($cek)
                                <span class="shadow-lg text-green-600 bg-green-300 p-3 rounded-full">Anda telah meminjam
                                    buku
                                    ini</span>
                            @else
                                <form action="{{ route('user.borrow', ['id' => $book->id]) }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="p-2 px-5 rounded-md bg-blue-600 hover:bg-blue-700 text-white md:mx-auto">Pinjam</button>
                                </form>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
