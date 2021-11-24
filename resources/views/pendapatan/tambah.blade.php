<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Tambah Data Pendapatan Pegawai</title>
</head>
<body>

	<h2>Naufal Rafiawan Basara</h2>
	<h3>Tambah Data Pendapatan</h3>

	<a href="/pendapatan" role="button" class="btn btn-large btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/pendapatan/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="text" name="IDPegawai" required="required"> <br/>
		Bulan <input type="text" name="Bulan" required="required"> <br/>
		Tahun <input type="number" name="Tahun" required="required"> <br/>
		Gaji <textarea name="Gaji" required="required"></textarea> <br/>
		Tunjangan <textarea name="Tunjangan" required="required"></textarea> <br/>
        <button type="submit" class="btn btn-lg btn-success">Simpan Data</button>
	</form>

</body>
</html>
