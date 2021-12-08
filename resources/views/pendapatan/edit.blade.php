@extends('layout.template')
@section('title', 'Edit Data Pendapatan')
<!DOCTYPE html>
<html>
<body>
    @section('content')
	<h2>Naufal Rafiawan Basara</h2>
	<h3>Edit Data Pendapatan</h3>

	<a href="/pendapatan" class="btn btn-md btn-primary mb-3"> Kembali</a>

	@foreach($pendapatan as $p)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $p->ID }}"> <br/>
		IDPegawai <input type="number" required="required" name="IDPegawai" value="{{ $p->IDPegawai }}"> <br/>
		Bulan <input type="number" required="required" name="Bulan" value="{{ $p->Bulan }}"> <br/>
		Tahun <input type="number" required="required" name="Tahun" value="{{ $p->Tahun }}"> <br/>
		Gaji <input type="number" required="required" name="Gaji" value="{{ $p->Gaji }}"> <br/>
        Tunjangan <input type="number" required="required" name="Tunjangan" value="{{ $p->Tunjangan }}"> <br/>
        <button type="submit" class="btn btn-md btn-success">Simpan Data</button>
	</form>
	@endforeach
    @endsection

</body>
</html>
