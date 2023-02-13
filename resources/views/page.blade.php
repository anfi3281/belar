<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paging</title>
</head>

<body>
    <h1>Paging</h1>
    <?php $urutan = 0; ?>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Hobi</th>
        </tr>
        @foreach ($data as $siswa)
            <?php $urutan++; ?>
            <tr>
                <td>{{ $urutan }}</td>
                <td>{{ $siswa->nama }}</td>
                <td>{{ $siswa->alamat }}</td>
                <td>{{ $siswa->hobi }}</td>
            </tr>
            @endforeach
        </table>

    Halaman : {{ $data->currentPage() }} <br>
    Jumlah Data : {{ $data->total() }} <br>
    Data Per Halaman : {{ $data->perPage() }} <br>

    {{ $data->links() }}
</body>

</html>
