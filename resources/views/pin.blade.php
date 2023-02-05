@php
    $masuk = 0;
    foreach ($login as $log) {
        if ($log->auth == $sesi) {
            $masuk = 1;
        }
    }
@endphp
@if ($masuk == 1)
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Konfirmasi</title>
        <style>
            body {
                background-color: blue;
            }

            .container {
                background-color: white;
                margin: auto;
                width: max-content;
                margin-top: 250px;
                padding: 30px;
                border-radius: 10px;
            }

            .subcontainer {
                margin: auto;
                width: max-content;
            }

            .subcontainer input {
                border: 0;
                width: 150px;
                height: 30px;
                background-color: rgb(57, 57, 255);
                color: white;
                font-size: 12;
                border-radius: 5px;
                margin-top: 10px;
                transition: 0.2s ease;
            }

            .subcontainer input:hover {
                transform: scale(1.05, 1.05);
                font-size: 11.5;
                background-color: blue;
                cursor: pointer;
            }

            a {
                margin-right: 20px;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <form action="/cekpin/<?php echo $log->auth;?> " method="POST">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <a>Masukkan Pin Anda</a><input type="password" style="width: 80px; text-align:center;" maxlength="6"
                    name="pn"><br><br>
                <div class="subcontainer">
                    <input type="submit" name="submit" value="ENTER">
                </div>
            </form>
        </div>
    </body>

    </html>
@else
    <script>
        window.location = "/";
    </script>
@endif
