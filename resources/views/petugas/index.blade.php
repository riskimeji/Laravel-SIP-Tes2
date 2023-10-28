@extends('petugas.layouts.main')
@section('title', 'Beranda')
@section('content')
    <div class="p-10">
        <div class="bg-gray-200 rounded-md p-3 border border-gray-400 shadow-md">
            <span class="text-gray-600  ">Home</span>
        </div>
        <div class="md:ms-5 mt-5 ">
            <span class="font-medium text-xl">Menu</span>
            <div class=" mt-2">
                <div class="grid grid-cols-1 md:grid-cols-6 p-2 gap-3">
                    <a href="/staff/books">
                        <div class="border border-gray-600 p-3 shadow-md rounded-md hover:bg-gray-200">
                            <div class="flex justify-center">
                                <img src="https://img.freepik.com/free-vector/hand-drawn-flat-design-stack-books_23-2149334862.jpg?w=740&t=st=1698379854~exp=1698380454~hmac=a431d39add1aeb3d9d67b969efa60d73b8cd9de7f404834968d3e47b452a892a"
                                    class="rounded-md">
                            </div>
                            <div class="text-center mt-2">
                                <span class="font-medium">Data Book</span>
                            </div>
                        </div>
                    </a>
                    <a href="/staff/member">
                        <div class="border border-gray-600 p-3 shadow-md rounded-md hover:bg-gray-200">
                            <div class="flex justify-center">
                                <img src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?w=740&t=st=1698380040~exp=1698380640~hmac=7da318cba9422346c16609cf5dfe2010c453b55576ab1ece04a0a3922840f2e8"
                                    class="rounded-md">
                            </div>
                            <div class="text-center mt-2">
                                <span class="font-medium">Data Member</span>
                            </div>
                        </div>
                    </a>
                    <a href="/staff/borrowed">
                        <div class="border border-gray-600 p-3 shadow-md rounded-md hover:bg-gray-200">
                            <div class="flex justify-center">
                                <img src="https://img.freepik.com/premium-vector/pile-books-hand_169241-2579.jpg?w=740"
                                    class="rounded-md">
                            </div>
                            <div class="text-center mt-2">
                                <span class="font-medium">Data Borrowed</span>
                            </div>
                        </div>
                    </a>
                    {{-- <a href="/book/detail">
                        <div class="border border-gray-600 p-3 shadow-md">
                            <div class="flex justify-center">
                                <img
                                    src="https://img.freepik.com/free-vector/bibliophile-concept-illustration_114360-1167.jpg?w=740&t=st=1698380230~exp=1698380830~hmac=f6a3b8e9b74ef8d003876165f190a231e6623b7c29783421a52c9e78014a9075">
                            </div>
                            <div class="text-center mt-2">
                                <span class="font-medium">Data Return</span>
                            </div>
                        </div>
                    </a> --}}
                </div>
            </div>
        </div>
        <div class="md:ms-5 mt-5 ">
            <span class="font-medium text-xl">Recently Added</span>
            <div class=" mt-2">
                <div class="grid grid-cols-1 md:grid-cols-6 p-2 gap-3">
                    @foreach ($books as $book)
                        <div class="border border-gray-600 p-3 shadow-md hover:bg-blue-200 rounded-md ">
                            <a href="/book/detail/{{ $book->slug }}">
                                <div class="flex justify-center">
                                    <img src="{{ $book->image }}" class="rounded-md">
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
        <div class="md:ms-5 mt-5 ">
            <span class="font-medium text-xl">Recently Borrowed</span>
            <div class=" mt-2">
                <div class="grid grid-cols-1 md:grid-cols-6 p-2 gap-3">
                    @foreach ($borroweds as $borrowed)
                        <div class="border border-gray-600 p-3 shadow-md hover:bg-blue-200 rounded-md ">
                            <a href="/book/detail/{{ $book->slug }}">
                                <div class="flex justify-center">
                                    <img src="{{ $borrowed->book->image }}" class="rounded-md">
                                </div>
                            </a>
                            <div class="text-center mt-2">
                                <span class="font-medium">{{ $borrowed->book->title }}</span><br>
                                <span class="">Peminjam: {{ $borrowed->user->name }}</span><br>
                                <div class="mt-2">
                                    <span
                                        class="mt-2 px-2 py-1 rounded-full
                                    @if ($borrowed->status === 'Dipinjam') bg-blue-500 text-white
                                    @elseif ($borrowed->status === 'Dikembalikan')
                                        bg-green-500 text-white
                                    @elseif ($borrowed->status === 'Terlambat')
                                        bg-orange-500 text-white
                                    @elseif ($borrowed->status === 'Hilang')
                                        bg-red-500 text-white
                                    @elseif ($borrowed->status === 'Rusak')
                                        bg-purple-500 text-white @endif
                                ">
                                        {{ $borrowed->status }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="mt-2 flex items-center justify-center">
                <!-- Tambah class 'justify-center' untuk mengatur horizontal center -->
                <a href="{{ route('staff.borrowed.index') }}">
                    <button
                        class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec] mx-auto shadow-md">More...</button>
                </a>
            </div>
        </div>
    </div>
@endsection
