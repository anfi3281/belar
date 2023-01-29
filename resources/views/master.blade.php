<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>

<body>

    <h3>@yield('halaman_judul')</h3>
    <ul style="list-style: none; display: block;">
        <li><a href="/blog">Home</a></li>
        <li><a href="/blog/tentang">Tentang</a></li>
        <li><a href="/blog/kontak">Kontak</a></li>
    </ul>
    <br>
    <hr><br><br>
    @yield('isi')
</body>

</html>
