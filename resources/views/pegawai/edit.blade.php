@extends('layout.template')
@section('title', 'Edit Data Pegawai')
<!DOCTYPE html>
<html>
<body>
    @section('content')
	<h3>Edit Pegawai</h3>
	<a href="/pegawai" class="btn btn-md btn-primary"> Kembali</a>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post" class="container">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="nama" value="{{ $p->pegawai_nama }}" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="jabatan" id="jabatan" value="{{ $p->pegawai_jabatan }}" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="umur" class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="umur" id="umur" value="{{ $p->pegawai_umur }}" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" name="alamat" id="alamat" required>{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-md btn-success">Simpan Data</button>

	</form>
	@endforeach

    @endsection

</body>
</html>
