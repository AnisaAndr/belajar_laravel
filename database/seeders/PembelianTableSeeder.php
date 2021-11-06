<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembelianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = [
            ['nama_barang'=>'Pop Ice', 'nama_suplier'=>'Aquila', 'qty'=>5, 'tanggal'=>'2021-10-29'],
            ['nama_barang'=>'Wafer', 'nama_suplier'=>'Lindawafer', 'qty'=>3, 'tanggal'=>'2021-10-30'],
            ['nama_barang'=>'HandPhone', 'nama_suplier'=>'Surya kencana', 'qty'=>1, 'tanggal'=>'2021-10-31'],
            ['nama_barang'=>'Sepeda', 'nama_suplier'=>'Inahelektronik', 'qty'=>1, 'tanggal'=>'2021-01-11'],
            ['nama_barang'=>'Pizza', 'nama_suplier'=>'Vivipizza', 'qty'=>2, 'tanggal'=>'2021-01-11']
            ];
            // masukan data ke database
            DB::table('pembelian')->insert($pembelian);
    }
}
