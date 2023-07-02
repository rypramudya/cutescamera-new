<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KameraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tabel_kamera')->insert([
            'nama_kamera'=>'Sony A7',
            'keterangan'=>'kamera bagus',
            'harga_sewa'=>'1000',
            'stok_kamera'=>'1',
            'type_kamera'=>'DSLR'

        ]);
        
    }
}
