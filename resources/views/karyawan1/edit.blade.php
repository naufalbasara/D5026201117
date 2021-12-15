@extends('layout.template')
@section('title', 'Edit Data Karyawan')
<!DOCTYPE html>
<html>
<body>
    @section('content')
	<h3>Edit Karyawan</h3>
	<a href="/karyawan1" class="btn btn-md btn-primary"> Kembali</a>

	@foreach($karyawan1 as $k)
	<form action="/karyawan1/update" method="post" class="container">
		{{ csrf_field() }}
		<input type="hidden" name="NIP" value="{{ $k->NIP }}"> <br/>
        <div class="mb-3 row">
            <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Nama" id="Nama" value="{{ $k->Nama }}" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="Pangkat" class="col-sm-2 col-form-label">Pangkat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Pangkat" id="Pangkat" value="{{ $k->Pangkat }}" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="Gaji" class="col-sm-2 col-form-label">Gaji</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Gaji" id="Gaji" value="{{ $k->Gaji }}" required>
            </div>
        </div>
        <button type="submit" class="btn btn-md btn-success">Simpan Data</button>

	</form>
	@endforeach

    @endsection

</body>
</html>
