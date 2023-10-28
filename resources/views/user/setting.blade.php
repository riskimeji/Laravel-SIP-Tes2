@extends('user.layouts.main')

@section('title', 'Setting')

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
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">User Profile</h2>
            <form action="{{ route('user.updateProfile') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="email" class="block font-medium">Email</label>
                    <input type="email" id="email" name="email" value="{{ $user->email }}"
                        class="border border-gray-300 p-2 w-full">
                </div>
                <div class="mb-4">
                    <label for="role" class="block font-medium">Role</label>
                    <span class="text-green-500">{{ $user->role }}</span>
                </div>
                <div class="mt-4">
                    <button type="submit" class="p-2 px-5 bg-blue-600 text-white rounded-md hover:bg-blue-700">Update
                        Profile
                    </button>
                </div>
            </form>
        </div>
        <div class="bg-white p-6 mt-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Change Password</h2>
            <form action="{{ route('update-password') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="current_password" class="block font-medium">Current Password</label>
                    <input type="password" id="current_password" name="current_password"
                        class="border border-gray-300 p-2 w-full">
                    @error('current_password')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="new_password" class="block font-medium">New Password</label>
                    <input type="password" id="new_password" name="new_password" class="border border-gray-300 p-2 w-full">
                    @error('new_password')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="confirm_password" class="block font-medium">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password"
                        class="border border-gray-300 p-2 w-full">
                    @error('confirm_password')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-4">
                    <button type="submit" class="p-2 px-5 bg-blue-600 text-white rounded-md hover:bg-blue-700">Change
                        Password
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
