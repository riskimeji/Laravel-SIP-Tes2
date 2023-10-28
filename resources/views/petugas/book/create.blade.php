@extends('petugas.layouts.main')
@section('title', 'Data Book')
@section('content')
    <div class="p-10">
        <div class="bg-gray-100 rounded-md p-3 border border-gray-400 shadow-md">
            <a href="/staff"><span class="text-gray-400 hover:text-gray-600">Home</span></a>
            <span>></span>
            <a href="/staff/books"><span class="text-gray-400 hover:text-gray-600">Books</span></a>
            <span class="text-gray-600">></span>
            <span class="text-gray-600">Create</span>
        </div>
        <div class="md:ms-5 mt-5 ">
            <div class=" mt-2 ">
                <div class="">
                    <form action="{{ route('staff.books.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="title" class="block font-semibold">Title</label>
                            <input type="text" name="title"
                                class="w-full p-2 outline-none border border-gray-300 focus:border-blue-500 rounded-md">
                            @if ($errors->has('title'))
                                <span class="text-red-600">{{ $errors->first('author') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="author" class="block font-semibold">Author</label>
                            <input type="text" name="author"
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
                                    <option value="{{ $category }}">{{ $category }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('category'))
                                <span class="text-red-600">{{ $errors->first('category') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="published" class="block font-semibold">Published</label>
                            <input type="date" name="published"
                                class="w-full p-2 outline-none border border-gray-300 focus:border-blue-500 rounded-md">
                            @if ($errors->has('published'))
                                <span class="text-red-600">{{ $errors->first('published') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="page" class="block font-semibold">Page</label>
                            <input type="number" name="page"
                                class="w-full p-2 outline-none border border-gray-300 focus:border-blue-500 rounded-md">
                            @if ($errors->has('page'))
                                <span class="text-red-600">{{ $errors->first('page') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="page" class="block font-semibold">Stock</label>
                            <input type="number" name="stock"
                                class="w-full p-2 outline-none border border-gray-300 focus:border-blue-500 rounded-md">
                            @if ($errors->has('stock'))
                                <span class="text-red-600">{{ $errors->first('stock') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block font-semibold">Description</label>
                            <textarea name="description" class="w-full p-2 outline-none border border-gray-300 focus:border-blue-500 rounded-md"></textarea>
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
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-full">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
