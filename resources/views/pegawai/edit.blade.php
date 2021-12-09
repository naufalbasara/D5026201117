@extends('layout.template')
@section('title', 'Edit Data Pegawai')
<!DOCTYPE html>
<html>
<body>
    @section('content')
	<h3>Edit Pegawai</h3>
	<a href="/pegawai" class="btn btn-md btn-primary"> Kembali</a>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
        <button type="submit" class="btn btn-md btn-success">Simpan Data</button>

	</form>
	@endforeach

    @endsection

</body>
</html>
