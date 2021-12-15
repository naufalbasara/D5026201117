@extends('layout.template')
@section('title', 'Tambah Data Pegawai')

<!DOCTYPE html>
<html>
<body>
    @section('content')
	<h3>Data Karyawan</h3>

	<a href="/karyawan1" class=" btn btn-md btn-primary mb-3"> Kembali</a>

	<form action="/karyawan1/store" method="post" class="container">
		{{ csrf_field() }}
        <div class="mb-3 row">
            <label for="NIP" class="col-sm-2 col-form-label">NIP</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="NIP" id="NIP" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Nama" id="Nama" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="Pangkat" class="col-sm-2 col-form-label">Pangkat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Pangkat" id="Pangkat"required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="Gaji" class="col-sm-2 col-form-label">Gaji</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Gaji" id="Gaji"required>
            </div>
        </div>
        <button type="submit" class="btn btn-md btn-success">Simpan Data</button>
	</form>
    @endsection
</body>
</html>
