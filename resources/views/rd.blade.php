<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request Data</title>
</head>

<body>
    <h1>Request Data</h1>
    <hr>
    <form action="/rd/submit" method="POST">
        <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
        Nama : <input type="text" name="nama"><br>
        NIM : <input type="text" name="nim"><br>
        <input type="submit" name="masuk" value="Submit">

    </form>
</body>

</html>
