<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Passing Data Controller ke View Larravel</title>
</head>

<body>
    <h1>Tutorial Laravel</h1>
    <a href="https://malasngoding.com/category/laravel">www.malasngoding.com</a>
    <p>Halo, nama saya {{$nama}}</p>
    <p>Saya kelas {{$class}}</p>
    <p>Berikut mata pelajarannya :</p>
    <ul>
        @foreach($makul as $m)
        <li>{{$m}}</li>
        @endforeach
    </ul>
</body>

</html>