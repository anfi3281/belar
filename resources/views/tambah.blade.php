<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai</title>
</head>

<body>
    <h1>Insert Employee Data</h1>
    <a href="/pegawai">Kembali</a>
    <br><br>
    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        Nama : <input type="text" name="nama" required><br><br>
        Jabatan : <input type="text" name="jabatan" required><br><br>
        Umur : <input type="text" name="umur" required><br><br>
        Alamat : <input type="text" name="alamat" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>
