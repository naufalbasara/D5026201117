<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Karyawan1Controller extends Controller
{
    public function index()
    {
    	// mengambil data dari table absen
        $karyawan1 = DB::table('karyawan1')
            ->paginate(5);

    	// mengirim data karyawan1 ke view index
    	return view('karyawan1.index',['karyawan1' => $karyawan1]);

    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table pegawai sesuai pencarian data
        $karyawan1 = DB::table('karyawan1')
            ->where('Nama','like',"%".$cari."%")
            ->paginate(5);

    	// mengirim data pegawai ke view index
		return view('karyawan1.index',['karyawan1' => $karyawan1]);
	}

// method untuk menampilkan view form tambah absen
public function tambah()
{
	// memanggil view tambah
	return view('karyawan1.tambah');

}

// method untuk insert data ke table karyawan1
public function store(Request $request)
{
	// insert data ke table karyawan1
	DB::table('karyawan1')->insert([
		'NIP' => $request->NIP,
		'Nama' => $request->Nama,
		'Pangkat' => $request->Pangkat,
        'Gaji' => $request->Gaji
	]);
	// alihkan halaman ke halaman karyawan1
	return redirect('/karyawan1');

}

// method untuk edit data karyawan1
public function edit($id)
{
	// mengambil data karyawan1 berdasarkan id yang dipilih
	$karyawan1 = DB::table('karyawan1')->where('NIP',$id)->get();

	// passing data karyawan1 yang didapat ke view edit.blade.php
	return view('karyawan1.edit',['karyawan1' => $karyawan1]);

}


// update data karyawan
public function update(Request $request)
{
	// update data karyawan
	DB::table('karyawan1')->where('NIP',$request->NIP)->update([
		'NIP' => $request->NIP,
		'Nama' => $request->Nama,
		'Pangkat' => $request->Pangkat,
        'Gaji' => $request->Gaji
	]);
	// alihkan halaman ke halaman awal
	return redirect('/karyawan1');
}

// method untuk hapus data karyawan
public function hapus($id)
{
	// menghapus data karyawan berdasarkan id yang dipilih
	DB::table('karyawan1')->where('NIP',$id)->delete();

	// alihkan halaman ke halaman karyawan
	return redirect('/karyawan1');
}

}
