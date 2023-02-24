<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RandiFootnote</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Kelola Footnote</h3>
                        <form action="">
                            <div class="mt-4 form-group">
                                <label for="jumlah">Jumlah Penulis</label>
                                <select class="form-select" onchange="javascript:handleselect(this)">
                                    @if (isset($jumlahpenulis))
                                        @if ($jumlahpenulis == 4)
                                            <option value="4" selected>Lebih dari 3</option>
                                            @for ($x = 1; $x <= 3; $x++)
                                                <option value="{{ $x }}">
                                                    {{ $x }}
                                                </option>
                                            @endfor
                                        @else
                                            @for ($x = 1; $x <= 3; $x++)
                                                @if ($x == $jumlahpenulis)
                                                    <option value="{{ $x }}" selected>{{ $x }}
                                                    </option>
                                                @else
                                                    <option class="mb-2" value="{{ $x }}">
                                                        {{ $x }}
                                                    </option>
                                                @endif
                                            @endfor
                                            <option value="4">Lebih dari 3</option>
                                        @endif
                                    @else
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">Lebih dari 3</option>
                                    @endif

                                </select>
                                <script type="text/javascript">
                                    function handleselect(elm) {
                                        window.location = "/" + elm.value;
                                    }
                                </script>
                            </div>
                            <div class="mt-1 form-group">
                                <label for="nama">Nama</label>
                                @if (isset($jumlahpenulis))
                                    @if ($jumlahpenulis == 4)
                                        <input type="text" class="form-control" placeholder="Penulis 1">
                                    @else
                                        @for ($i = 1; $i <= $jumlahpenulis; $i++)
                                            <input type="text" class="mb-1 form-control"
                                                placeholder="Penulis {{ $i }}">
                                        @endfor
                                    @endif
                                @else
                                    <input type="text" class="form-control" placeholder="Penulis 1">
                                @endif


                            </div>
                            <div class="mt-3 form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mt-1 form-group">
                                <label for="sumber">Sumber</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mt-1 form-group">
                                <label for="tahun">Tahun</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mt-1 form-group">
                                <label for="halaman">Halaman</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="text-center mt-3">
                                <input type="submit" name="input" value="Input" class="w-50 btn btn-primary">
                                <input type="submit" name="edit" value="Edit" class="w-25 btn btn-danger"
                                    style="margin-left:20px">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center mb-4">Daftar Footnote</h3>
                        <table class="table table-striped">
                            <tr>
                                <th style="width:35px;">No</th>
                                <th>Footnote</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
