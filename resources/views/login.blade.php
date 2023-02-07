@foreach ($login as $log)
    @foreach ($captcha as $ca)
        @if ($capt == $ca->captcha)
            @if ($username == $log->username && $password == $log->password)
                @php
                    $num = '';
                    $host = mysqli_connect('localhost', 'root', '23122002', 'SYSBPS');

                @endphp
                @if ($log->kesempatan < 1 && $log->kesempatan > 3)
                    <script>
                        window.location = "/";
                    </script>
                @else
                    @php
                        for ($i = 0; $i <= 9; $i++) {
                            $num .= rand(1, 9);
                        }
                        $kes = 3;
                        mysqli_query($host, 'INSERT INTO `SYSBPS_AUTH` (`auth`, `captcha`, `kesempatan`) VALUES (' . $num . ', ' . $ca->captcha . ', ' . $kes . ')');
                        mysqli_query($host, 'TRUNCATE `SYSBPS_CAPTCHA`');
                        $link = '/home/' . $num;
                    @endphp
                    <script>
                        window.location = "<?php echo $link; ?>";
                    </script>
                @endif
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
