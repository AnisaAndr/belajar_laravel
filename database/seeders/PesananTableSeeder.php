<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PesananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan = [
            ['nama_pelanggan'=>'Anisa Andriani', 'nama_barang'=>'Pop Ice', 'qty'=>5, 'tanggal_pesan'=>'2021-10-29'],
            ['nama_pelanggan'=>'Astri Pitriana', 'nama_barang'=>'Wafer', 'qty'=>3, 'tanggal_pesan'=>'2021-10-30'],
            ['nama_pelanggan'=>'Indah Rianti', 'nama_barang'=>'HandPhone', 'qty'=>1, 'tanggal_pesan'=>'2021-10-31'],
            ['nama_pelanggan'=>'Lia Amelia', 'nama_barang'=>'Sepeda', 'qty'=>1, 'tanggal_pesan'=>'2021-11-01'],
            ['nama_pelanggan'=>'Putri Perdana', 'nama_barang'=>'Pizza', 'qty'=>2, 'tanggal_pesan'=>'2021-11-01'],
            ];
            // masukan data ke database
            DB::table('pesanan')->insert($pesanan);
    }
}
