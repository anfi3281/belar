@foreach ($pin as $kode)
    @if ($kode->kesempatan < 1 && $kode->kesempatan > 3)
        @php
            foreach ($auth as $log) {
                $host = mysqli_connect('localhost', 'root', '23122002', 'SYSBPS');
                mysqli_query($host, 'DELETE FROM `SYSBPS_AUTH`');
            }
        @endphp
        <script>
            window.location = "/";
        </script>
    @else
        @if ($cekpin == $kode->pin)
            @foreach ($pin as $aut)
                @php
                    $nama = $aut->username;
                    $kode2 = '';
                    for ($i = 0; $i < 9; $i++) {
                        $kode2 .= rand(1, 9);
                    }
                    $host = mysqli_connect('localhost', 'root', '23122002', 'SYSBPS');
                    mysqli_query($host, 'UPDATE `SYSBPS_LOGIN` SET `auth` = ' . $kode2 . '');
                @endphp
                <script>
                    window.location = "/home/<?php echo $sesi; ?>/<?php echo $kode2; ?>";
                </script>
            @endforeach
        @else
            @php
                foreach ($auth as $log) {
                    $jumlahkesempatan = $kode->kesempatan - 1;
                    $nama = $kode->username;
                    $host = mysqli_connect('localhost', 'root', '23122002', 'SYSBPS');
                    mysqli_query($host, 'UPDATE `SYSBPS_LOGIN` SET `kesempatan` = ' . $jumlahkesempatan . '');
                    $auten = $log->auth;
                }
            @endphp
            <script>
                window.location = "/home/<?php echo $auten; ?>";
            </script>
        @endif
    @endif
@endforeach
