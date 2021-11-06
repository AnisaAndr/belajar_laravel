<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembeliTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = [
            ['nama'=>'Anisa Andriani', 'jenis_kelamin'=>'Perempuan', 'alamat'=>"Kp. Bojong Cijerah", 'kode_pos'=>40879,
            'kota'=>'Bandung', 'tgl_lahir'=>'2004-08-22'],
            ['nama'=>'Astri Pitriana', 'jenis_kelamin'=>'Perempuan', 'alamat'=>"Kp. Pasawahan", 'kode_pos'=>40097,
            'kota'=>'Bandung', 'tgl_lahir'=>'2004-11-10'],
            ['nama'=>'Indah Rianti', 'jenis_kelamin'=>'Perempuan', 'alamat'=>"Kp. Cilebak", 'kode_pos'=>48901,
            'kota'=>'Bandung', 'tgl_lahir'=>'2004-10-23'],
            ['nama'=>'Lia Amelia', 'jenis_kelamin'=>'Perempuan', 'alamat'=>"Kp. Pasawahan", 'kode_pos'=>47741,
            'kota'=>'Bandung', 'tgl_lahir'=>'2004-03-07'],
            ['nama'=>'Putri Perdana', 'jenis_kelamin'=>'Perempuan', 'alamat'=>"TCI", 'kode_pos'=>57708,
            'kota'=>'Bandung', 'tgl_lahir'=>'2005-01-18']
            ];
            // masukan data ke database
            DB::table('pembeli')->insert($pembeli);
    }
}
