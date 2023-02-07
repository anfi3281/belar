@php
    $masuk = 0;
@endphp

@foreach ($login as $log)
    @foreach ($auth as $aut)
        @if ($aut->auth == $sesi1 && $log->auth == $sesi2)
            @if ($aut->kesempatan >= 1 && $aut->kesempatan <= 3)
                @php
                    $masuk = 1;
                @endphp
            @else
                <script>
                    window.location = "/";
                </script>
            @endif
        @else
            @if ($aut->auth == $sesi1)
                @php
                    $host = mysqli_connect('localhost', 'root', '23122002', 'SYSBPS');
                    $kesempatan_auth = $aut->kesempatan - 1;
                    mysqli_query($host, 'UPDATE `SYSBPS_AUTH` SET `kesempatan` = ' . $kesempatan_auth . ' WHERE `auth` = '.$sesi1.'');
                @endphp
                <script>
                    window.location = "/";
                </script>
            @else
            @endif
        @endif
    @endforeach
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
