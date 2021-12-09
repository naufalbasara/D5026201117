@extends('layout.template')
@section('title', 'Edit Data Absen')
<!DOCTYPE html>
<html>
<body>
    @section('content')
	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah" class="btn btn-md btn-success mb-3"> + Tambah Pegawai Baru</a>

    <form action="/pegawai/cari" method="GET" class="row mb-3">
        <div class="col-3">
            <div class="input-group mt-3">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg></span>
                <input class="form-control" name="cari" type="text" placeholder="Cari Berdasarkan Nama Pegawai" value="{{ old('cari') }}">
              </div>
        </div>
        <input type="submit" hidden>
    </form>
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
