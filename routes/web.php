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

/*Route::get('blog', function(){
    $data = [
        ['id' => 1, 'title' => 'Lorem Ipsum 1', 'content' => 'Content Pertama'],
        ['id' => 2, 'title' => 'Lorem Ipsum 2', 'content' => 'Content kedua'],
        ['id' => 3, 'title' => 'Lorem Ipsum 3', 'content' => 'Content Ketiga'],
    ];
    //dd($data);
    return view('blog', compact('data'));
});*/

/*Route::get('absen', function(){
    $data1 = [
        ['Nis' => 19201753228, 'Nama' => 'Alya Nurlia', 'Jenis Kelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'Alamat' => 'NataEndah'],
        ['Nis' => 19201753229, 'Nama' => 'Anggi Fitria', 'Jenis Kelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Babakan Cilebak'],
        ['Nis' => 19201753230, 'Nama' => 'Anisa Andriani', 'Jenis Kelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3','Alamat' => 'Kp. Bojong Cijerah'],
        ['Nis' => 19201753231, 'Nama' => 'Arif Muhammad Iqbal', 'Jenis Kelamin' => 'Laki-Laki', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Kp. Cibedug Girang'],
        ['Nis' => 19201753232, 'Nama' => 'Astri Pitriana Mustika', 'Jenis Kelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Kp. Pasawahan'],
        ['Nis' => 19201753233, 'Nama' => 'Azhar Rizky Aulia', 'Jenis Kelamin' => 'Laki-Laki', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Rancamanyar Regency 2'],
        ['Nis' => 19201753234, 'Nama' => 'Aziz Tubagus Taufik Hirzi', 'Jenis Kelamin' => 'Laki-Laki', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Sekeawi'],
        ['Nis' => 19201753235, 'Nama' => 'Bima Putra Rohendi', 'Jenis Kelamin' => 'Laki-Laki', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Rancamanyar'],
        ['Nis' => 19201753236, 'Nama' => 'Cindy Nurul Azijah', 'Jenis Kelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Bojong Kukun'],
        ['Nis' => 19201753237, 'Nama' => 'Dinda Dwi Octaviani', 'Jenis Kelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Komplek BMI'],
    
    ];

    return view('absen', compact('data1'));
});*/

/*Route::get('siswa', function(){
    $siswas = [
        [
            'id' => 1,
            'nama' => 'Anisa Andriani',
            'username' => 'Anisa',
            'email' => 'anisa@gmail.com',
            'alamat' => 'Bandung',
            'mapel' => [
                'mapel1' => 'Bahasa Indonesia',
                'mapel2' => 'Bahasa Inggris',
                'mapel3' => 'Bahasa Jepang',
                'mapel4' => 'Bahasa Belanda',
            ]
            ],

            [
                'id' => 2,
                'nama' => 'Anisa Andriani',
                'username' => 'Anisa',
                'email' => 'anisa@gmail.com',
                'alamat' => 'Bandung',
                'mapel' => [
                    'mapel1' => 'Bahasa Indonesia',
                    'mapel2' => 'Bahasa Inggris',
                    'mapel3' => 'Bahasa Jepang',
                    'mapel4' => 'Bahasa Belanda',
                ]
                ],
        ];
        return view('siswa', compact('siswas'));
});*/

//Route Parameter
//optional menyediakan data apabila tidak diisi
//null boleh kosong

/*Route::get('/input/{nama?}', function($nama="Anisa"){
    echo "Nama Saya : ". $nama. "<br>";
});*/

/*Route::get('/input/{nama?}/{jk?}/{tempat_lahir?}/{tanggal_lahir?}/{alamat?}/{agama?}/{hobi?}', 
function($nama="Anisa", $jk="P", $tempat_lahir="Bdg", $tanggal_lahir="22", $alamat="bojong", $agama="islam", $hobi="masak"){
    echo "Nama Saya : ".$nama. "<br>";
    echo "Jenis Kelamin : ".$jk."<br>";
    echo "Tempat Lahir : ".$tempat_lahir. "<br>";
    echo "Tanggal Lahir : ".$tanggal_lahir. "<br>";
    echo "Alamat : ".$alamat. "<br>";
    echo "Agama : ".$agama. "<br>";
    echo "Hobi : ".$hobi. "<br>";
});*/

/*Route::get('/data/{nama?}/{mtk?}/{produktif?}/{inggris?}/{indo?}', 
function($nama = null, $mtk = 0, $produktif = 0, $inggris = 0, $indo = 0){
    echo "Nama : ". $nama. "<br>";
    echo "Nilai Matematika : ". $mtk. "<br>";
    echo "Nilai Produktif : ". $produktif. "<br>";
    echo "Nilai Bahasa Inggris : ". $inggris. "<br>";
    echo "Nilai Bahasa Indonesia : ". $indo. "<br>";
    $rata = ($mtk + $produktif + $inggris + $indo) / 4;
    echo "Rata-Rata : ". $rata. "<br>";
    echo "Grade : ";
    if($rata >= 90){
        echo "A";
    } elseif($rata >= 80){
        echo "B";
    } elseif($rata >= 70){
        echo "C";
    } elseif($rata <= 70){
        echo "D";
    }
});*/

/*Route::get('/pesan/{makan?}/{minum?}/{cemilan?}', 
function ($makan = null, $minum = null, $cemilan = null) {

    if ($makan && $minum && $cemilan != null) {
        return "Anda Memesan <br> Makanan : $makan <br>
                Minuman : $minum <br>
                Cemilan : $cemilan";
    } else if ($makan && $minum != null) {
        return "Anda Memesan <br> Makanan : $makan <br>
                Minuman : $minum";
    } else if ($makan || $minum != null) {
        return $makan != null ? "Anda Memesan <br> Makanan : $makan" : "Anda Memesan Minuman : $minum";
    } else {
        return "Anda Tidak Memesan, Silahkan Pulang";
             }

});*/

//Menampilkan DATA POST
Route::get('/testmodel', function(){
    $query = App\Models\Post::all();
    return $query;
});