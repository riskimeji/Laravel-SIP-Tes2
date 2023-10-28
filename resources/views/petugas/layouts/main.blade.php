<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    @vite('resources/css/app.css')
    <title>@yield('title')</title>

</head>

<body class="font-[Poppins] bg-white h-screen">
    <header class="bg-white shadow-md">
        <nav class="flex justify-between items-center w-[92%]  mx-auto">
            <div class="p-6">
                {{-- <img class="w-16 cursor-pointer" src="https://cdn-icons-png.flaticon.com/512/5968/5968204.png"
                    alt="..."> --}}
                <a href="/staff"><span class="text-xl font-bold w-16 my-6">Staff</span></a>
            </div>
            <div
                class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li>
                        <a class="hover:text-gray-500 {{ request()->is('staff') ? 'text-blue-600 font-bold' : '' }}"
                            href="/staff">Beranda</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500 {{ request()->is('staff/books*') ? 'text-blue-600 font-bold' : '' }}"
                            href="/staff/books">Books</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500 {{ request()->is('staff/member*') ? 'text-blue-600 font-bold' : '' }}"
                            href="/staff/member">Members</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500 {{ request()->is('staff/borrowed*') ? 'text-blue-600 font-bold' : '' }}"
                            href="/staff/borrowed">Borrows</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="bg-[#a6c1ee] text-white px-5 py-2 rounded-full hover:bg-[#87acec]">Keluar</button>
                </form>
                <ion-icon onclick="onToggleMenu(this)" name="menu"
                    class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
        </nav>
    </header>
    {{-- Main --}}
    <main class="">
        @yield('content')
    </main>
    <script>
        const navLinks = document.querySelector('.nav-links')

        function onToggleMenu(e) {
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[10%]')
        }
    </script>
    <script>
        document.getElementById("searchInput").addEventListener("keypress", function(e) {
            if (e.key === "Enter") {
                e.preventDefault();
                var query = this.value;
                var searchUrl = "{{ route('staff.member.index') }}?query=" + query;
                window.location.href = searchUrl;
            }
        });
    </script>
    <script>
        document.getElementById("searchInputBooks").addEventListener("keypress", function(e) {
            if (e.key === "Enter") {
                e.preventDefault();
                var query = this.value;
                var searchUrl = "{{ route('staff.books.index') }}?query=" + query;
                window.location.href = searchUrl;
            }
        });
    </script>
    <script>
        document.getElementById("searchInputBoroowed").addEventListener("keypress", function(e) {
            if (e.key === "Enter") {
                e.preventDefault();
                var query = this.value;
                var searchUrl = "{{ route('staff.borrowed.index') }}?query=" + query;
                window.location.href = searchUrl;
            }
        });
    </script>

</body>

</html>
