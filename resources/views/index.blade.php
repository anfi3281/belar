<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css" type="text/css">
</head>

<body>

    {{-- Container --}}
    <div class="container-fluid">
        <div class="row justify-content-center">
            {{-- Kelola --}}
            <div class="col-lg-5 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center mb-5">Kelola Data Siswa</h3>
                        <form action="/proses" method="post">
                            <div class="form-group mb-3">
                                <label for="nim">NIM</label>
                                <input type="text" class="form-control" name="nim" value="{{ old('nim') }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{ old('alamat') }}">
                            </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col text-center">
                                        <input type="submit" class="btn btn-primary" value="Input" name="input">
                                    </div>
                                    <div class="col text-center">
                                        <input type="submit" class="btn w-25 btn-warning text-white" value="Ubah"
                                            name="ubah">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- EndKelola --}}
            {{-- Tabel --}}
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Tabel Data Siswa</h3>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            {{-- EndTabel --}}
        </div>
    </div>
    {{-- EndContainer --}}

</body>

</html>
