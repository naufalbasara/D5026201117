<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KertasController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$hvs = DB::table('kertashvs')->paginate(5);

    	// mengirim data pegawai ke view index
    	return view('hvs.index',['hvs' => $hvs]);

    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table pegawai sesuai pencarian data
		$hvs = DB::table('kertashvs')
		->where('merkkertashvs','like',"%".$cari."%")
		->paginate(5);

    	// mengirim data pegawai ke view index
		return view('hvs.index',['hvs' => $hvs]);
	}

    public function view($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $hvs = DB::table('kertashvs')->where('kodekertashvs',$id)->get();
        // passing data hvs yang didapat ke view edit.blade.php
        return view('hvs.detail',['hvs' => $hvs]);

    }


    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

        // memanggil view tambah
        return view('hvs.tambah');

    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('kertashvs')->insert([
            'merkkertashvs' => $request->merk,
            'stockkertashvs' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/merkkertashvs');

    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $hvs = DB::table('kertashvs')->where('kodekertashvs',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('hvs.edit',['hvs' => $hvs]);

    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('kertashvs')->where('kodekertashvs',$request->kodekertashvs)->update([
            'merkkertashvs' => $request->merk,
            'stockkertashvs' => $request->stock,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/merkkertashvs');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('kertashvs')->where('kodekertashvs',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/merkkertashvs');
    }
}
