@extends('layout.template')
@section('title', 'Edit Data Pendapatan')
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Tugas Pemrograman Web CRUD Laravel MYSQL</title>
</head>
<body>
    @section('content')
	<h2>Naufal Rafiawan Basara</h2>
	<h3>Data Pendapatan</h3>

	<a href="/pendapatan/tambah" class="btn btn-md btn-success"> + Tambah Data Pendapatan Baru</a>

	<table border="1" class="table">
		<tr>
			<th>ID Pegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
			<th>Tunjangan</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>
			<td>{{ $p->IDPegawai }}</td>
			<td>{{ $p->Bulan }}</td>
			<td>{{ $p->Tahun }}</td>
			<td>{{ $p->Gaji }}</td>
			<td>{{ $p->Tunjangan }}</td>
			<td>
				<a href="/pendapatan/edit/{{ $p->ID }}" class="btn btn-md btn-primary">Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $p->ID }}"class="btn btn-md btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    @endsection

</body>
</html>
