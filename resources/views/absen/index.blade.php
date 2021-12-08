@extends('layout.template')
@section('title', 'Data Absen')
<!DOCTYPE html>
<body>
    @section('content')
	<h3>Data Absen</h3>

	<a href="/absen/tambah" class="btn btn-md btn-success"> + Tambah Absen Baru</a>

	<br/>
	<br/>

	<table border="1" class="table">
		<tr>
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>
			<td>{{ $a->IDPegawai }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID}}" class="btn btn-md btn-primary">Edit</a>
				|
				<a href="/absen/hapus/{{ $a->ID}}" class="btn btn-md btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    @endsection
</body>
</html>
