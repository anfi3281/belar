<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah</title>
</head>

<body>
    <h3>Data Pegawai</h3>
    <form action="/datapegawai/store" method="post">
        {{ csrf_field() }}
        Nama : <input type="text" name="nama" required="required"><br>
        Jabatan : <input type="text" name="jabatan" required="required"><br>
        Umur : <input type="text" name="umur" required="required"><br>
        Alamat : <input type="text" name="alamat" required="required"><br>
        <input type="submit" name="submit" value="Enter">
    </form>
</body>

</html>
