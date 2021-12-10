<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Tambah Data Pendapatan Pegawai</title>
</head>
<body>

	<h2>Naufal Rafiawan Basara</h2>
	<h3>Tambah Data Pendapatan</h3>

	<a href="/pendapatan" role="button" class="btn btn-large btn-primary"> Kembali</a>

	<br/>
	<br/>

    <form action="/pendapatan/store" method="post">
        {{ csrf_field() }}
        <div class="container">

            <div class="mb-3 row">
                <label for="idpegawai" class="col-sm-2 control-label">Nama Pegawai</label>
                    <div class='col-sm-10'>
                        <select class="form-control" name="IDPegawai" id="idpegawai">
                            @foreach($pegawai as $p )
                                <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                            @endforeach
                        </select>
                    </div>
            </div>

            <div class="mb-3 row">
                <label for="bulan" class="col-sm-2 col-form-label">Bulan</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="Bulan" id="bulan" min="1" max="12" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="Tahun" class="col-sm-2 col-form-label">Tahun</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Tahun" id="Tahun" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="Gaji" class="col-sm-2 col-form-label">Gaji</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Gaji" id="Gaji" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="Tunjangan" class="col-sm-2 col-form-label">Tunjangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Tunjangan" id="Tunjangan" required>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-md btn-success">Simpan Data</button>
    </form>

</body>
</html>
