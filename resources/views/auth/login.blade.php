<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in - Perpustakaan</title>
    <link href="./dist/output.css" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="bg-[#f2f6ff]">
    <div class="h-screen flex items-center justify-center">
        <div class="bg-white p-10 shadow-lg mx-5 md:w-[350px]">
            <div class="text-2xl text-center font-bold text-gray-600">
                <label>Sign in</label>
            </div>
            <form action="{{ route('authenticate') }}" method="POST">
                @csrf
                <div class="mt-10">
                    <input class="py-3 w-full border-b-2 outline-none focus:border-b-blue-500" name="email"
                        type="email" placeholder="Enter your email" />
                    @if ($errors->has('email'))
                        <span class="text-red-600">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="">
                    <input id="password" class="mt-5 py-3 w-full border-b-2 outline-none focus:border-b-blue-500"
                        type="password" placeholder="Enter your password" name="password" />
                    @if ($errors->has('password'))
                        <span class="text-red-600">{{ $errors->first('password') }}</span><br>
                    @endif
                    <input type="checkbox" class="mt-3" onclick="myFunction()" />&nbsp;Show Password
                </div>
                <div class="mt-6 flex justify-center">
                    <button type="submit"
                        class="p-2.5 w-full bg-blue-500 text-white rounded-md shadow-sm hover:shadow-md hover:bg-blue-600">
                        Sign in
                    </button>
                </div>
            </form>

            <div class="mt-5 text-center">
                <div class="mt-3 text-base text-blue-500">
                    <a href="#">Forgot password?</a>
                </div>
                <label for="">Don't have an account?</label><a href="/register" class="text-blue-500">&nbsp;Sign
                    up</a>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {
            var x = document.getElementById('password');
            if (x.type === 'password') {
                x.type = 'text';
            } else {
                x.type = 'password';
            }
        }
    </script>
</body>

</html>
