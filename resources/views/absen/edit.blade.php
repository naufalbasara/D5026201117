@extends('layout.template')
@section('title', 'Edit Data Absen')

@section('content')
    <a href="/absen"class="btn btn-md btn-primary mb-3 mt-3"> Kembali</a>
    <form action="/absen/store" method="post">
        {{ csrf_field() }}
        <div class="container">

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Pegawai :</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <select class="form-control" name="idpegawai">
                                @foreach($pegawai as $p )
                                    <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
                        <div class='col-sm-4 input-group date' id='dtpickerdemo'>
                            <input type='text' class="form-control" name="tanggal" required="required" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function() {
                        $('#dtpickerdemo').datetimepicker({
                            format: "YYYY-MM-DD hh:mm:ss",
                            "defaultDate": new Date(),
                            locale : "id"
                        });
                    });
                </script>
            </div>
        </div>
        Status
        <input type="radio" id="h" name="status" value="H">
        <label for="h">HADIR</label><br>
        <input type="radio" id="a" name="status" value="A" checked="checked">
        <label for="a">TIDAK HADIR</label><br>
        <button type="submit" class="btn btn-md btn-success">Simpan Data</button>
    </form>
@endsection

