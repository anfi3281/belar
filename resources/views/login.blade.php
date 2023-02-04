@foreach ($login as $log)
    @if ($username == $log->username && $password == $log->password)
        @php
            $num = '';
            $host = mysqli_connect('localhost', 'root', '23122002', 'SYSBPS');
            for ($i = 0; $i <= 10; $i++) {
                $num .= rand(0, 9);
            }
            mysqli_query($host, 'TRUNCATE `SYSBPS_AUTH`');

            mysqli_query($host, 'INSERT INTO `SYSBPS_AUTH` (`auth`) VALUES ('.$num.')');
        @endphp
        <script>
            window.location = "/home/";
        </script>
    @else
        <script>
            window.location = "/";
        </script>
    @endif
@endforeach
