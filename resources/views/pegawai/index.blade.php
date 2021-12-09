@extends('layout.template')
@section('title', 'Edit Data Absen')
<!DOCTYPE html>
<html>
<body>
    @section('content')
	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah" class="btn btn-md btn-success mb-3"> + Tambah Pegawai Baru</a>

	<table border="1" class="table">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-md btn-primary mb-3">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-md btn-danger mb-3">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $pegawai->links()  }}
    @endsection
</body>
</html>
