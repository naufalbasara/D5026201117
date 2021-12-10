@extends('layout.template')
@section('title', 'Tambah Data Pegawai')

<!DOCTYPE html>
<html>
<body>
    @section('content')
	<h3>Data Pegawai</h3>

	<a href="/pegawai" class=" btn btn-md btn-primary mb-3"> Kembali</a>

	<form action="/pegawai/store" method="post" class="container">
		{{ csrf_field() }}
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="nama" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="jabatan" id="jabatan"required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="umur" class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="umur" id="umur"required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" name="alamat" id="alamat" required></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-md btn-success">Simpan Data</button>
	</form>
    @endsection
</body>
</html>
