@extends('petugas.layouts.main')
@section('title', 'Data Book')

@section('content')
    <div class="p-10">
        <div class="bg-gray-200 rounded-md p-3 border border-gray-400 shadow-md">
            <a href="/staff"><span class="text-gray-400 hover:text-gray-600">Home</span></a>
            <span>></span>
            <a href="/staff/books"><span class="text-gray-400 hover:text-gray-600">Books</span></a>
            <span class="text-gray-600">></span>
            <span class="text-gray-600">Edit</span>
        </div>
        <div class="md:ms-5 mt-5 ">
            <div class=" mt-2 ">
                <div class="">
                    <form action="{{ route('staff.books.update', $book->slug) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="title" class="block font-semibold">Title</label>
                            <input type="text" name="title" value="{{ $book->title }}"
                                class="w-full p-2 outline-none border border-gray-300 focus:border-blue-500 rounded-md">
                            @if ($errors->has('title'))
                                <span class="text-red-600">{{ $errors->first('author') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="author" class="block font-semibold">Author</label>
                            <input type="text" name="author" value="{{ $book->author }}"
                                class="w-full p-2 outline-none border border-gray-300 focus:border-blue-500 rounded-md">
                            @if ($errors->has('author'))
                                <span class="text-red-600">{{ $errors->first('author') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="category" class="block font-semibold">Category</label>
                            <select name="category"
                                class="w-full p-2 border border-gray-300 focus:border-blue-500 rounded-md">
                                @foreach ($categories as $category)
                                    @if ($book->category === $category)
                                        <option value="{{ $category }}" selected="selected">{{ $category }}</option>
                                    @else
                                        <option value="{{ $category }}">{{ $category }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @if ($errors->has('category'))
                                <span class="text-red-600">{{ $errors->first('category') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="published" class="block font-semibold">Published</label>
                            <input type="date" name="published" value="{{ $book->published }}"
                                class="w-full p-2 outline-none border border-gray-300 focus:border-blue-500 rounded-md">
                            @if ($errors->has('published'))
                                <span class="text-red-600">{{ $errors->first('published') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="page" class="block font-semibold">Page</label>
                            <input type="number" name="page" value="{{ $book->page }}"
                                class="w-full p-2 outline-none border border-gray-300 focus:border-blue-500 rounded-md">
                            @if ($errors->has('page'))
                                <span class="text-red-600">{{ $errors->first('page') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="page" class="block font-semibold">Stock</label>
                            <input type="number" name="stock" value="{{ $book->stock }}"
                                class="w-full p-2 outline-none border border-gray-300 focus:border-blue-500 rounded-md">
                            @if ($errors->has('stock'))
                                <span class="text-red-600">{{ $errors->first('stock') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block font-semibold">Description</label>
                            <textarea name="description" class="w-full p-2 outline-none border border-gray-300 focus:border-blue-500 rounded-md">{{ $book->description }}</textarea>
                            @if ($errors->has('description'))
                                <span class="text-red-600">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="image" class="block font-semibold">Image</label>
                            <input type="file" name="image" accept="image/*"
                                class="w-full p-2 outline-none border border-gray-300 focus:border-blue-500 rounded-md">
                            @if ($errors->has('image'))
                                <span class="text-red-600">{{ $errors->first('image') }}</span>
                            @endif
                            <img src="{{ url($book->image) }}" class="w-32" alt="">
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-full">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
