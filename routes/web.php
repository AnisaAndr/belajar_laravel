<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hal2', function (){
    return "<h1> Selamat Datang Dihalaman Kedua</h1>";
});

Route::get('biodata1', function(){
    $nama = "Anisa Andriani";
    $jk = "Perempuan";
    $tempat_lahir = "Bandung";
    $tanggal_lahir = "22 Agustus 2004";
    $alamat = "Kp. Bojong Cijerah";
    $agama = "Islam";
    $hobi = "Menonton Film";
    return "Nama : ".$nama. "<br>
            Jenis Kelamin : ". $jk. "<br>
            Tempat Lahir : ". $tempat_lahir. "<br>
            Tanggal Lahir : ". $tanggal_lahir. "<br>
            Alamat : ". $alamat. "<br>
            Agama : ". $agama. "<br>
            Hobi : ". $hobi;
});

Route::get('biodata2', function(){
    $nama = "Anisa Andriani";
    $jk = "Perempuan";
    $tempat_lahir = "Bandung";
    $tanggal_lahir = "22 Agustus 2004";
    $alamat = "Kp. Bojong Cijerah";
    $agama = "Islam";
    $hobi = "Menonton Film";
    return view('biodata', compact('nama', 'jk', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'agama', 'hobi'));
});