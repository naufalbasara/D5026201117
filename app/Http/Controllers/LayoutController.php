<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LayoutController extends Controller
{
    public function index()
    {

    	// mengirim data absen ke view index
    	return view('layout.template');

    }

}
