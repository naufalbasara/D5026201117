@extends('layout.template')
@section('title', 'Tambah Data Merk Kertas HVS')

<!DOCTYPE html>
<html>
<body>
    @section('content')
	<h3>Data Merk Kertas HVS</h3>

	<a href="/merkkertashvs" class=" btn btn-md btn-primary mb-3"> Kembali</a>

	<form action="/merkkertashvs/store" method="post" class="container">
		{{ csrf_field() }}

        <div class="mb-3 row">
            <label for="merk" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="merk" id="merk" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="stock" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="stock" id="stock" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="check">Tersedia</label>
            <div class="col-sm-10" id="check">
                <input class="form-check-input" type="radio" name="tersedia" id="tersedia" value="Y">
                <label class="form-check-label" for="tersedia">
                    Tersedia
                </label>

                <input class="form-check-input" type="radio" name="tersedia" id="tidak_tersedia" value="N" checked>
                <label class="form-check-label" for="tidak_tersedia">
                  Tidak Tersedia
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-md btn-success">Simpan Data</button>
	</form>
    @endsection
</body>
</html>
