<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['nama'=>'Pop Ice', 'varian'=>'Permen Karet', 'harga_beli'=>5000, 'harga_jual'=>4800],
            ['nama'=>'Wafer', 'varian'=>'Coklat', 'harga_beli'=>10000, 'harga_jual'=>9000],
            ['nama'=>'HandPhone', 'varian'=>'Putih', 'harga_beli'=>1900000, 'harga_jual'=>1850000],
            ['nama'=>'Sepeda', 'varian'=>'Merah', 'harga_beli'=>800000, 'harga_jual'=>775000],
            ['nama'=>'Pizza', 'varian'=>'Besar', 'harga_beli'=>175000, 'harga_jual'=>169000]
            ];
            // masukan data ke database
            DB::table('barang')->insert($barang);
    }
}
