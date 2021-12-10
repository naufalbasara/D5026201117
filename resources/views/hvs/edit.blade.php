@extends('layout.template')
@section('title', 'Edit Data Merk Kertas HVS')
<!DOCTYPE html>
<html>
<body>
    @section('content')
	<h3>Edit Data Merk Kertas HVS</h3>
	<a href="/merkkertashvs" class="btn btn-md btn-primary">Kembali</a>

	@foreach($hvs as $h)
	<form action="/merkkertashvs/update" method="post" class="container">
		{{ csrf_field() }}
		<input type="hidden" name="kodekertashvs" value="{{ $h->kodekertashvs }}">
        <div class="mb-3 row">
            <label for="merk" class="col-sm-2 col-form-label">Merk Kertas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="merk" id="merk" value="{{ $h->merkkertashvs }}" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="stock" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="stock" id="stock" value="{{ $h->stockkertashvs }}" required>
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
	@endforeach

    @endsection

</body>
</html>
