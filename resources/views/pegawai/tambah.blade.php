@extends('layout.template')
@section('title', 'Tambah Data Pegawai')

<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
    @section('content')
	<h3>Data Pegawai</h3>

	<a href="/pegawai" class=" btn btn-md btn-primary mb-3"> Kembali</a>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <label for="nama">Nama </label>
		<input type="text" name="nama" required="required" id="nama"> <br/>

        <label for="jabatan">Jabatan </label>
		<input type="text" name="jabatan" required="required" id="jabatan"> <br/>

        <label for="umur">Umur </label>
		<input type="text" name="umur" required="required" id="umur"> <br/>

        <label for="alamat">Alamat </label>
		<input type="text" name="alamat" required="required" id="alamat"> <br/>

		<button type="submit" class="btn btn-md btn-success">Simpan Data</button>
	</form>
    @endsection
</body>
</html>
