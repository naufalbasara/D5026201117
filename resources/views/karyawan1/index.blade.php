@extends('layout.template')
@section('title', 'Data Karyawan 1')
<!DOCTYPE html>
<body>
    @section('content')
	<h3>Data Karyawan</h3>

	<a href="/karyawan1/tambah" class="btn btn-md btn-success"> + Tambah Karyawan Baru</a>

	<form action="/karyawan1/cari" method="GET" class="row mb-3">
        <div class="col-5">
            <div class="input-group mt-3">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg></span>
                <input class="form-control" name="cari" type="text" placeholder="Cari Berdasarkan Nama Karyawan" value="{{ old('cari') }}">
              </div>
        </div>
        <input type="submit" hidden>
    </form>

	<table border="1" class="table">
		<tr>
			<th>NIP</th>
			<th>Nama</th>
			<th>Pangkat</th>
			<th>Gaji</th>
		</tr>
		@foreach($karyawan1 as $k)
		<tr>
			<td>{{ $k->NIP }}</td>
			<td>{{ $k->Nama }}</td>
			<td>{{ $k->Pangkat }}</td>
			<td>Rp{{ number_format($k->Gaji) }}</td>
			<td>
				<a href="/karyawan1/edit/{{ $k->NIP}}" class="btn btn-md btn-primary">Edit</a>
				|
				<a href="/karyawan1/hapus/{{ $k->NIP}}" class="btn btn-md btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $karyawan1->links()  }}
    @endsection
</body>
</html>
