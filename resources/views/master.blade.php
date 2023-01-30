<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master</title>
    <style>
        ul li,
        ul li a {
            text-decoration: none;
            list-style: none;
            color: black;
            float: left;
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <h1>@yield('halaman_judul')</h1>
    <ul>
        <li><a href="/blog">Home</a></li>
        <li><a href="/blog/tentang">Tentang</a></li>
        <li><a href="/blog/kontak">Kontak</a></li>
    </ul>
    <br>
    <hr>
    <br>
    @yield('isi')
</body>

</html>
