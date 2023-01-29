<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pegawai</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>

<body>
    <div class="container">
        <h1>Daftar Pegawai Perusahaan</h1>
        <table border="1">
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
            </tr>
            <tr>
                @foreach ($pegawai as $p)
                    <td>{{ $p->pegawai_nama }}</td>
                    <td>{{ $p->pegawai_jabatan }}</td>
                    <td>{{ $p->pegawai_umur }}</td>
                    <td>{{ $p->pegawai_alamat }}</td>
                @endforeach
            </tr>
        </table>
    </div>
</body>

</html>
