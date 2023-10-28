@extends('petugas.layouts.main')
@section('title', 'Edit Borrowed Book')

@section('content')
    <div class="p-10">
        <div class="bg-gray-200 rounded-md p-3 border border-gray-400 shadow-md">
            <a href="/staff"><span class="text-gray-400 hover:text-gray-600">Home</span></a>
            <span> > </span>
            <a href="/staff/borrowed"><span class="text-gray-400 hover:text-gray-600">Borrowed</span></a>
            <span class="text-gray-600"> > Edit</span>
        </div>
        <div class="md:ms-5 mt-5 ">
            <div class=" mt-2 ">
                <div class="">
                    <form action="{{ route('staff.borrowed.update', $borrowed->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="status" class="block font-semibold">Status</label>
                            <select name="status"
                                class="w-full p-2 border border-gray-300 focus:border-blue-500 rounded-md">
                                <option value="Dipinjam" {{ $borrowed->status === 'Dipinjam' ? 'selected' : '' }}>Dipinjam
                                </option>
                                <option value="Dikembalikan" {{ $borrowed->status === 'Dikembalikan' ? 'selected' : '' }}>
                                    Dikembalikan
                                </option>
                                <option value="Terlambat" {{ $borrowed->status === 'Terlambat' ? 'selected' : '' }}>
                                    Terlambat</option>
                                <option value="Hilang" {{ $borrowed->status === 'Hilang' ? 'selected' : '' }}>Hilang
                                </option>
                                <option value="Rusak" {{ $borrowed->status === 'Rusak' ? 'selected' : '' }}>Rusak</option>
                            </select>
                            @if ($errors->has('status'))
                                <span class="text-red-600">{{ $errors->first('status') }}</span>
                            @endif
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
