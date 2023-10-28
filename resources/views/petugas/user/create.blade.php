@extends('petugas.layouts.main')
@section('title', 'Create User')

@section('content')
    <div class="p-10">
        <div class="bg-gray-100 rounded-md p-3 border border-gray-400 shadow-md">
            <a href="/staff"><span class="text-gray-400 hover:text-gray-600">Home</span></a>
            <span>></span>
            <a href="/staff/member"><span class="text-gray-400 hover:text-gray-600">Members</span></a>
            <span class="text-gray-600">></span>
            <span class="text-gray-600">Create</span>
        </div>
        <div class="md:ms-5 mt-5">
            <div class="mt-2">
                <div class="">
                    <form action="{{ route('staff.member.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block font-semibold">Name</label>
                            <input type="text" name="name"
                                class="w-full p-2 outline-none border border-gray-300 focus:border-blue-500 rounded-md">
                            @if ($errors->has('name'))
                                <span class="text-red-600">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block font-semibold">Email</label>
                            <input type="email" name="email"
                                class="w-full p-2 outline-none border border-gray-300 focus:border-blue-500 rounded-md">
                            @if ($errors->has('email'))
                                <span class="text-red-600">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block font-semibold">Password</label>
                            <input type="password" name="password"
                                class="w-full p-2 outline-none border border-gray-300 focus-border-blue-500 rounded-md">
                            @if ($errors->has('password'))
                                <span class="text-red-600">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="role" class="block font-semibold">Role</label>
                            <select name="role"
                                class="w-full p-2 border border-gray-300 focus-border-blue-500 rounded-md">
                                <option value="staff">Staff</option>
                                <option value="visitor">Visitor</option>
                            </select>
                            @if ($errors->has('role'))
                                <span class="text-red-600">{{ $errors->first('role') }}</span>
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
