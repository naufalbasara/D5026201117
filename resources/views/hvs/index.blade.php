@extends('layout.template')
@section('title', 'Merk Kertas HVS')
<!DOCTYPE html>
<html>
<body>
    @section('content')
	<h3>Data Merk Kertas HVS</h3>

	<a href="/merkkertashvs/tambah" class="btn btn-md btn-success mb-3"> + Tambah Merk Kertas HVS Baru</a>

    <form action="/merkkertashvs/cari" method="GET" class="row mb-3">
        <div class="col-5">
            <div class="input-group mt-3">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg></span>
                <input class="form-control" name="cari" type="text" placeholder="Cari Berdasarkan Nama Merk" value="{{ old('cari') }}">
              </div>
        </div>
        <input type="submit" hidden>
    </form>
	<table border="1" class="table">
		<tr>
			<th>Merk</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($hvs as $h)
		<tr>
			<td>{{ $h->merkkertashvs }}</td>
			<td>{{ $h->tersedia }}</td>
			<td>
                <a href="/merkkertashvs/detail/{{ $h->kodekertashvs }}" class="btn btn-md btn-info mb-3">View Details</a>
				|
				<a href="/merkkertashvs/edit/{{ $h->kodekertashvs }}" class="btn btn-md btn-primary mb-3">Edit</a>
				|
				<a href="/merkkertashvs/hapus/{{ $h->kodekertashvs }}" class="btn btn-md btn-danger mb-3">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $hvs->links()  }}
    @endsection
</body>
</html>
