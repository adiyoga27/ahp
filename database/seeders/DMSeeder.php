<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dm')->insert(
        array([
            'code' => 'DM1',
            'description' => 'Kepala Seksi Pengembangan Daya Tarik Wisata 
            Bali',
            
        ],
        [
            'code' => 'DM2',
            'description' => 'Kepala Bidang Pengembangan Kelembagaan 
            dan SDM',
            
        ],
        [
            'code' => 'DM3',
            'description' => 'Kepala Bidang Destinasi Pariwisata',
            
        ]
        )
        );
    }
}
