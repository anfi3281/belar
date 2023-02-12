<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai</title>
</head>

<body>
    <h1>Employee Data</h1>
    <br>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Keterangan</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/update/{{ $p->pegawai_id }}">UPDATE </a>
                    |
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}"> HAPUS</a>
                </td>
            </tr>
        @endforeach
    </table>
    <br>
    <form action="/pegawai/tambah" method="post">
        {{ csrf_field() }}
        <input type="submit" name="submit" value="TAMBAH">
    </form>
</body>

</html>
