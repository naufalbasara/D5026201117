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
	<h3>Data Pendapatan</h3>

	<a href="/pendapatan/tambah" class="btn btn-md btn-success"> + Tambah Data Pendapatan Baru</a>
    <form action="/pendapatan/cari" method="GET" class="row mb-3">
        <div class="col-5">
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
			<th>Nama Pegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
			<th>Tunjangan</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
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
    {{ $pendapatan->links()  }}
    @endsection

</body>
</html>
