<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai</title>
</head>

<body>
    <h1>Data Pegawai</h1>
    <hr>
    <br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
        </tr>
        @foreach ($pegawai as $p)
            <td> {{ $p->pegawai_id }}</td>
            <td> {{ $p->pegawai_nama }}</td>
            <td> {{ $p->pegawai_jabatan }}</td>
            <td> {{ $p->pegawai_umur }}</td>
            <td> {{ $p->pegawai_alamat }}</td>
        @endforeach
    </table>
</body>

</html>
