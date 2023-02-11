<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Input Buku</title>
</head>

<body>
    <h1>Silahkan Input Buku Disini</h1>
    <div class="container">
        <form action="/buku/cek" method="POST">
            <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
            Nama : <input type="text" name="nama"><br><br>
            Tahun : <input type="text" name="tahun"><br><br>
            <div class="subcontainer">
                <input type="submit" name="submit" value="Enter">
            </div>
        </form>
    </div>
</body>

</html>
