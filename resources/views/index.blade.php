<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coba</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css" type="text/css">
</head>

<body class="bg-primary">
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center mb-5">Kelola</h3>
                        <form action="/cek" method="post">
                            {{ csrf_field() }}
                            @switch($no)
                                @case(0)
                                    <div class="form-group mb-4">
                                        <label for="Nama">Nama</label>
                                        <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" name="alamat" value="{{ old('alamat') }}">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <input type="text" class="form-control" name="pekerjaan"
                                            value="{{ old('pekerjaan') }}">
                                    </div>
                                @break

                                @case(1)
                                    @foreach ($pegawai2 as $p)
                                        <input type="hidden" name="urutan" value="{{ $p->id }}">
                                        <div class="form-group mb-4">
                                            <label for="Nama">Nama</label>
                                            <input type="text" class="form-control" name="nama"
                                                value="{{ $p->nama }}">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" name="alamat"
                                                value="{{ $p->alamat }}">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="pekerjaan">Pekerjaan</label>
                                            <input type="text" class="form-control" name="pekerjaan"
                                                value="{{ $p->pekerjaan }}">
                                        </div>
                                    @endforeach
                                @break

                            @endswitch
                            <div class="text-center">
                                <input type="submit" class="btn btn-primary" name="enter" value="Enter"
                                    style="margin-right:20px;">
                                <input type="submit" class="btn btn-warning text-white" name="ubah" value="Ubah">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mt-4 mb-4">
                    <div class="card-body">
                        <form action="/coba/cari" method="POST">
                            {{ csrf_field() }}
                            <input class="form-control" name="cari" type="text" placeholder="Cari disini ....">
                            <div class="text-center">
                                <input type="submit" name="find" value="Cari" class="btn btn-primary w-50 mt-2">
                                <input type="submit" name="reset" value="Reset" class="btn btn-primary w-25 mt-2" style="margin-left:25px">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center mb-5">Data</h3>
                        <table class="table table-striped">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Pekerjaan</th>
                                <th style="width: 150px;">Ket.</th>
                            </tr>
                            <?php $urutanpegawai = 0; ?>
                            @foreach ($pegawai as $data)
                                <?php $urutanpegawai++; ?>
                                <tr>
                                    <td>{{ $urutanpegawai }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>{{ $data->pekerjaan }}</td>
                                    <td>
                                        <a href="/coba/edit/{{ $data->id }}" class="text-warning">Edit</a>
                                        |
                                        <a href="/coba/hapus/{{ $data->id }}" class="text-danger">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {{ $pegawai->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
