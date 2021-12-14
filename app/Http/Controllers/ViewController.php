<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    function showETS() {
        //source untuk data / proses bisnis yg di olah
        return view('tugas.ets') ;
    }
    function showGreetings() {
        //source untuk data / proses bisnis yg di olah
        return view('showgreetings') ;
    }
    function sayHi() {
        //source untuk data / proses bisnis yg di olah
        return view('tugas') ;
    }
    function showTugasHTML() {
        return view('tugas.tugasHTML');
    }
    function showTugasHTMLCSS() {
        return view('tugas.tugasHTMLCSS');
    }
    function showTugasBootstrap() {
        return view('tugas.tugasBootstrap');
    }
    function showTugasJS() {
        return view('tugas.tugasJavascript');
    }
    function showPraktikumJS() {
        return view('praktikum.javascript');
    }
    function showPraktikumBootstrap() {
        return view('praktikum.bootstrap');
    }

}
