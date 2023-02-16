<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buku</title>
</head>

<body>
    <h1>Buku</h1>
    <br><br>
    <form action="kelola" method="post">
        Judul : <input type="text"><br><br>
        Penerbit : <input type="text"><br><br>
        Pengarang : <input type="text"><br><br>
        <input type="submit" name="tambah" value="tambah">
        <input type="submit" name="edit" value="edit"><br><br><br>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penerbit</th>
                <th>Pengarang</th>
                <th>Keterangan</th>
            </tr>
            <?php $i = 0; ?>
            @foreach ($data as $buku)
                <?php $i++; ?>
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->penerbit }}</td>
                    <td>{{ $buku->pengarang }}</td>
                    <td>
                        <a href="/buku/edit/{{$buku->id}}">Edit</a>
                         |
                        <a href="/buku/hapus/{{$buku->id}}">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
        
    </form>
</body>

</html>
