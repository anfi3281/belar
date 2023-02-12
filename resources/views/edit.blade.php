<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>

<body>
    <h1>Update Employee Data</h1>
    <a href="/pegawai">Kembali</a><br><br>
    @foreach ($id as $di)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $di->pegawai_id }}">
            Nama : <input type="text" name="nama" value="{{ $di->pegawai_nama }}"><br>
            Jabatan : <input type="text" name="jabatan" value="{{ $di->pegawai_jabatan }}"><br>
            Umur : <input type="text" name="umur" value="{{ $di->pegawai_umur }}"><br>
            Alamat : <input type="text" name="alamat" value="{{ $di->pegawai_alamat }}"><br>
            <input type="submit" name="submit" value="UPDATE">
        </form>
    @endforeach
</body>

</html>
