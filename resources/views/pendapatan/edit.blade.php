<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Modifikasi Data Pendapatan</title>
</head>
<body>

	<h2>Naufal Rafiawan Basara</h2>
	<h3>Edit Data Pendapatan</h3>

	<a href="/pendapatan" class="btn btn-lg btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($pendapatan as $p)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $p->ID }}"> <br/>
		IDPegawai <input type="number" required="required" name="IDPegawai" value="{{ $p->IDPegawai }}"> <br/>
		Bulan <input type="number" required="required" name="Bulan" value="{{ $p->Bulan }}"> <br/>
		Tahun <input type="number" required="required" name="Tahun" value="{{ $p->Tahun }}"> <br/>
		Gaji <input type="number" required="required" name="Gaji" value="{{ $p->Gaji }}"> <br/>
        Tunjangan <input type="number" required="required" name="Tunjangan" value="{{ $p->Tunjangan }}"> <br/>
        <button type="submit" class="btn btn-lg btn-success">Simpan Data</button>
	</form>
	@endforeach


</body>
</html>
