@foreach ($login as $log)
    @foreach ($captcha as $ca)
        @if ($capt == $ca->captcha)
            @if ($username == $log->username && $password == $log->password)
                @php
                    $num = '';
                    $host = mysqli_connect('localhost', 'root', '23122002', 'SYSBPS');
                    for ($i = 0; $i <= 10; $i++) {
                        $num .= rand(0, 9);
                    }
                    mysqli_query($host, 'INSERT INTO `SYSBPS_AUTH` (`auth`, `captcha`) VALUES (' . $num . ', ' . $ca->captcha . ')');
                    mysqli_query($host, 'TRUNCATE `SYSBPS_CAPTCHA`');
                    $link = '/home/' . $num;
                @endphp
                <script>
                    window.location = "<?php echo $link; ?>";
                </script>
            @else
                <script>
                    window.location = "/";
                </script>
            @endif
        @else
            <script>
                window.location = "/";
            </script>
        @endif
    @endforeach
@endforeach
