<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data Karyawan</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>

<body>
    <h1>Input Data Karyawan</h1>
    <form action="inputdata/proses" method="POST">
        <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
        <table>
            <tr>
                <td>Nama :</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat :</td>
                <td><input type="text" name="alamat"></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>
