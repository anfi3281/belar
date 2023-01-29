<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Input</title>
    <link rel="stylesheet" href="../css/app.css">
</head>

<body>
    <h1>Formulir Pendaftaran</h1>
    <div class="container">
        <form action="input/proses" method="POST">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <table>
                <tr>
                    <td>Nama : </td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Kelas : </td>
                    <td><input type="text" name="kelas"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="submit"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
