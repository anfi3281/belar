<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Passing Data</title>
</head>

<body>
    <h1>Belajar Passing Data</h1>
    <hr>
    <p>
        Halo, nama saya {{$nama}}, nim saya adalah {{$nim}}, kesukaan saya adalah
        @foreach ($kesukaan as $k )
            {{$k}}
        @endforeach
    </p>
</body>

</html>
