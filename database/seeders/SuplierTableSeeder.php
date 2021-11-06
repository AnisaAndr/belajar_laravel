<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SuplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suplier = [
            ['nama'=>'Aquila', 'alamat'=>'Jakarta Pusat', 'kode_pos'=>45576, 'kota'=>'Jakarta'],
            ['nama'=>'Lindawafer', 'alamat'=>'Jl. Matahari', 'kode_pos'=>46687, 'kota'=>'Depok'],
            ['nama'=>'Surya Kencana', 'alamat'=>'Jl. Kencana', 'kode_pos'=>47698, 'kota'=>'Tangerang'],
            ['nama'=>'Inahelektronik', 'alamat'=>'Kp. Karang Anyar', 'kode_pos'=>40123, 'kota'=>'Bandung'],
            ['nama'=>'Vivipizza', 'alamat'=>'Kp. Melati', 'kode_pos'=>40234, 'kota'=>'Bogor'],
            ];
            // masukan data ke database
            DB::table('suplier')->insert($suplier);
    }
}
