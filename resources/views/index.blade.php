<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h1>LOGIN</h1>
        <form action="login" method="POST">
            <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
            <table align="center">
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="ue"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="pasword" name="pd"></td>
                </tr>
            </table>
            <div class="subcontainer">
                <input style="margin:auto;" type="submit" value="MASUK">
            </div>
        </form>
    </div>
</body>

</html>
