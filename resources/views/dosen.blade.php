<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Dosen</title>
</head>

<body>
    <h1>Tutorial Laravel</h1>
    <p>
        <a href="https://malasngoding.com">www.malasngoding.com</a>
        <br>
        <br>
        Nama : {{ $nama }} <br><br>
        Mata Pelajaran : <br><br>
    <ul>
        @foreach ($pelajaran as $p)
            <li>{{$p}}</li>
        @endforeach
    </ul>
    </p>

</body>

</html>
