@foreach ($pin as $kode)
    @if ($cekpin == $kode->pin)
    @else
        @php
            foreach ($auth as $log) {
                $host = mysqli_connect('localhost', 'root', '23122002', 'SYSBPS');
                mysqli_query($host, 'DELETE FROM SYSBPS_AUTH WHERE auth=' . $log->auth . '');
            }
        @endphp
    @endif
@endforeach
