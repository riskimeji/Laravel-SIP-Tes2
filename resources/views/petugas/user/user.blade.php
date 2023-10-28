@extends('petugas.layouts.main')
@section('title', 'Data Member')

@section('content')
    <div class="p-10">
        <div class="bg-gray-200 rounded-md border border-gray-400 p-3 shadow-md">
            <a href="/staff"><span class="text-gray-400 hover:text-gray-600">Home</span></a>
            <span> > </span>
            <span class="text-gray-600">Members ({{ $counts }})</span>
        </div>
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
        <div class="mt-5 md:ms-2 mb-3">
            <div class="flex justify-between">
                <button
                    class="shadow-md hover:bg-white hover:text-blue-600 hover:border border-blue-600 transition p-2 px-4 bg-blue-600 text-white rounded-full">
                    <a href="{{ route('staff.member.create') }}">Create</a>
                </button>
                <input type="text"
                    class="shadow-md p-3 outline-none border border-gray-100 rounded-md text-sm focus:border-blue-500"
                    placeholder="Enter for search..." name="query" id="searchInput" value="{{ request('query') }}">
            </div>
        </div>
        <div class="md:ms-5 mt-5">
            <div class="mt-2">
                <div class="overflow-x-auto">
                    <table class="w-full md:w-max md:min-w-full">
                        <thead>
                            <tr class="bg-blue-500 text-white">
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Email</th>
                                <th class="px-4 py-2">Role</th>
                                <th class="px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr class="hover:bg-gray-100">
                                    <td class="px-4 py-2">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-2">{{ $user->name }}</td>
                                    <td class="px-4 py-2">{{ $user->email }}</td>
                                    <td class="px-4 py-2">
                                        @if ($user->role === 'staff')
                                            <span class="bg-blue-500 text-white px-2 py-1 rounded-full">Staff</span>
                                        @elseif ($user->role === 'visitor')
                                            <span class="bg-green-500 text-white px-2 py-1 rounded-full">Visitor</span>
                                        @else
                                            <span>{{ $user->role }}</span>
                                        @endif
                                    </td>
                                    <td class="px-4 py-2 flex justify-center gap-1">
                                        <form action="{{ route('staff.member.destroy', $user->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                class="p-1.5 mt-2 w-max h-max rounded-full border border-red-600 text-red-600 hover:bg-red-600 hover:text-white flex justify-center items-center cursor-pointer float-left">
                                                <ion-icon name="trash" class="text-xl"></ion-icon>
                                            </button>
                                        </form>
                                        <a href="{{ route('staff.member.edit', ['id' => $user->id]) }}">
                                            <button
                                                class="p-1.5 mt-2 w-max h-max rounded-full border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white flex justify-center items-center cursor-pointer float-left">
                                                <ion-icon name="create" class="text-xl"></ion-icon>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            @if ($users->isEmpty())
                <div class="text-center mt-2">
                    <span class="text-center col-span-6 text-gray-600">Tidak ada user tersedia.</span>

                </div>
            @endif
        </div>
        <div class="mt-2">
            {{ $users->links('pagination::simple-tailwind') }}
        </div>
    </div>


@endsection
