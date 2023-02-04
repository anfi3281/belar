@php
    $masuk = 0;
@endphp
@foreach ($login as $a)
    @if (isset($a->auth))
        @php
            $host = mysqli_connect('localhost', 'root', '23122002', 'SYSBPS');
            mysqli_query($host, 'TRUNCATE `SYSBPS_AUTH`');
            $masuk = 1;
        @endphp
    @else
    @endif
@endforeach
@if ($masuk == 1)
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
    </head>

    <body>
        sjhdkuh
    </body>

    </html>
@else
    <script>
        window.location = "/";
    </script>
@endif
