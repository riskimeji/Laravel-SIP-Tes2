<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 Not Found</title>
    @vite('resources/css/app.css')
    <style>
        body {
            text-align: center;
            background-color: #f2f2f2;
        }

        .error-container {
            margin: 100px auto;
            padding: 20px;
            border: 2px solid #d9534f;
            background-color: #f2dede;
            border-radius: 5px;
            width: 50%;
        }

        .error-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .error-description {
            font-size: 18px;
        }

        .home-link {
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div class="error-container">
        <div class="error-title">404 Not Found</div>
        <div class="error-description">Halaman yang Anda cari tidak ditemukan.</div>
        <a class="home-link" href="/">Kembali ke Beranda</a>
    </div>
</body>

</html>
