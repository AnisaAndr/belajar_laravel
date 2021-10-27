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

/*Route::get('/', function () {
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
});*/

Route::get('blog', function(){
    $data = [
        ['id' => 1, 'title' => 'Lorem Ipsum 1', 'content' => 'Content Pertama'],
        ['id' => 2, 'title' => 'Lorem Ipsum 2', 'content' => 'Content kedua'],
        ['id' => 3, 'title' => 'Lorem Ipsum 3', 'content' => 'Content Ketiga'],
    ];
    //dd($data);
    return view('blog', compact('data'));
});

/*Route::get('/input/{nama}/{jk}/{tempat_lahir}/{tanggal_lahir}/{alamat}/{agama}/{hobi}', 
function($nama, $jk, $tempat_lahir, $tanggal_lahir, $alamat, $agama, $hobi){
    echo "Nama : ".$nama. "<br>";
    echo "Jenis Kelamin : ".$jk."<br>";
    echo "Tempat Lahir : ".$tempat_lahir. "<br>";
    echo "Tanggal Lahir : ".$tanggal_lahir. "<br>";
    echo "Alamat : ".$alamat. "<br>";
    echo "Agama : ".$agama. "<br>";
    echo "Hobi : ".$hobi. "<br>";


});*/