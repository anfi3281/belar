<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RandiFootnote</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        tr * {
            font-size: 10pt;
            font-family: 'Times New Roman';
        }
    </style>
</head>

<body class="bg-primary">
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="col-lg-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center">Kelola Footnote</h4>
                        <form action="/kelola" method="POST" >
                            {{ csrf_field() }}
                            <div class="mt-4 form-group">
                                <label for="jumlah">Jumlah Penulis : </label>
                                <select class="form-select-sm" onchange="javascript:handleselect(this)">
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
                                @if (isset($jumlahpenulis))
                                    @if ($jumlahpenulis == 4)
                                        <input type="text" class=" form-control" placeholder="Penulis 1"
                                            name="penulis_1">
                                    @else
                                        @for ($i = 1; $i <= $jumlahpenulis; $i++)
                                            <input type="text" class="form-control"
                                                placeholder="Penulis {{ $i }}"
                                                name="penulis_{{ $i }}">
                                        @endfor
                                    @endif
                                @else
                                    <input type="text" class="form-control" placeholder="Penulis 1"
                                        name="penulis_1">
                                @endif


                            </div>
                            <div class="form-group  mt-3">
                                <label for="judul">Judul</label> <br>
                                <textarea name="judul" class="form-control" id="" cols="30" rows="2" placeholder="Tuliskan Judul"></textarea>
                            </div>
                            <div class="mt-3 form-group">
                                <label for="sumber">Sumber : </label>
                                <input type="text" class="form-control-sm" name="sumber" placeholder="Sumber">
                            </div>
                            <div class="mt-3 form-group">
                                <label for="volume">Volume : </label>
                                <input type="text" class="form-control-sm" name="volume" placeholder="Volume">
                            </div>
                            <div class="mt-3 form-group">
                                <label for="nomor">Nomor : </label>
                                <input type="text" class="form-control-sm" name="nomor" placeholder="Nomor">
                            </div>
                            <div class="mt-3 form-group">
                                <label for="tahun">Tahun : </label>
                                <input type="text" class="form-control-sm" name="tahun" placeholder="Tahun">
                            </div>
                            <div class="mt-3 form-group">
                                <label for="halaman">Halaman : </label>
                                <input type="text" class="form-control-sm float-left" style="width:60px;" name="halaman_awal"
                                    placeholder="Awal">
                                    -
                                <input type="text" class="form-control-sm float-left" style="width:60px;" name="halaman_akhir"
                                    placeholder="Akhir">
                            </div>
                            <div class="text-center mt-3">
                                <input type="submit" name="input" value="Input" class="w-25 btn btn-primary">
                                <input type="submit" name="edit" value="Edit" class="w-25 btn btn-danger"
                                    style="margin-left:20px">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mb-3" >
                <div class="card" style="height: 639px;">
                    <div class="card-body">
                        <h4 class="text-center mb-3">Daftar Footnote</h4>
                        <table class="table table-striped" >
                            <tr>
                                <th style="width:35px;">No</th>
                                <th>Footnote</th>
                                <th style="width:25px;">Keterangan</th>
                            </tr>
                            <tr></tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
