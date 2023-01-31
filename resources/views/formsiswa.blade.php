<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Siswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="subcontainer1">
            <h1>Form Isian Siswa</h1>
            <form action="/siswa/proses" method="POST">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" placeholder="Masukkan Nama Siswa"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jeniskelamin" value="Laki-laki">Laki-laki
                            <input type="radio" name="jeniskelamin" value="Perempuan">Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Hobi</td>
                        <td>:</td>
                        <td><select name="hobi" id="hb">
                                <option value="Komputer">Komputer</option>
                                <option value="Olahraga">Olahraga</option>
                                <option value="Memancing">Memancing</option>
                            </select></td>
                    </tr>
                </table>
                <input type="submit" name="proses" value="Proses">
            </form>
        </div>
        <div class="subcontainer2">
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Hobi</th>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
