<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h1>Ini Data Pegawai</h1>
    <form action="/index/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari disini ..." value="{{ old('cari') }}">
        <input type="submit" name="caridata" value="cari">
    </form>
    <br><br>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Alamat</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->pegawai_nama }}</td>
                <td>{{ $d->pegawai_jabatan }}</td>
                <td>{{ $d->pegawai_alamat }}</td>
            </tr>
        @endforeach
    </table>
    <br>
    Ini halaman ke : {{ $data->currentPage() }} <br>
    Total halaman : {{ $data->Total() }} <br>
    Jumlah data per halaman : {{ $data->perPage() }} <br>
    {{ $data->links() }}
</body>

</html>
