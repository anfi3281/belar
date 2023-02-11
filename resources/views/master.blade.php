<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <style>
        ul li {
            list-style-type: none;
            float: left;
            margin-right: 20px;
        }
    </style>
</head>

<body>
    <h1>@yield('judul')</h1>
    <ul>
        <li><a href="/blog">Home</a></li>
        <li><a href="/blog/tentang">Tentang</a></li>
        <li><a href="/blog/kontak">Kontak</a></li>
    </ul><br>
    <hr>
    @yield('isi')
</body>

</html>
