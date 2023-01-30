<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Siswa</title>
</head>

<body>
    <h1>Halo, ini adalah data siswa</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
        </tr>
        <tr>
            @foreach ($siswa as $s)
                <td>{{ $s->nama }}</td>
                <td>{{ $s->jeniskelamin }}</td>
                <td>{{ $s->jurusan }}</td>
            @endforeach
        </tr>
    </table>
</body>

</html>
