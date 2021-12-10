@extends('layout.template')
@section('title', 'Edit Data Pendapatan')
<!DOCTYPE html>
<html>
<body>
    @section('content')
        <h3>Edit Data Pendapatan</h3>

        <a href="/pendapatan" class="btn btn-md btn-primary mb-3"> Kembali</a>

        @foreach($pendapatan as $p)
        <form action="/pendapatan/update" method="post">
            {{ csrf_field() }}
            <div class="container">
                <input type="hidden" name="ID" value="{{ $p->ID }}"> <br/>

                <div class="mb-3 row">
                    <label for="idpegawai" class="col-sm-2 control-label">Nama Pegawai</label>
                        <div class='col-sm-10'>
                            <select class="form-control" name="IDPegawai" id="idpegawai">
                                @foreach($pegawai as $pg )
                                    <option value="{{ $pg->pegawai_id }}"> {{ $pg->pegawai_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                </div>

                <div class="mb-3 row">
                    <label for="bulan" class="col-sm-2 col-form-label">Bulan</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="Bulan" id="bulan" min="1" max="12" value="{{ $p->Bulan }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="Tahun" class="col-sm-2 col-form-label">Tahun</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Tahun" id="Tahun" value="{{ $p->Tahun }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="Gaji" class="col-sm-2 col-form-label">Gaji</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Gaji" id="Gaji" value="{{ $p->Gaji }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="Tunjangan" class="col-sm-2 col-form-label">Tunjangan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Tunjangan" id="Tunjangan" value="{{ $p->Tunjangan }}" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-md btn-success">Simpan Data</button>
        </form>
        @endforeach
    @endsection

</body>
</html>
