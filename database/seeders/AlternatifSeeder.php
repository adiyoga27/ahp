<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlternatifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alternatif')->insert(
            array(
                [
                    'code' => 'A1',
                    'sub_desc' => 'Pawongan',
                    'description' => 'Promosi destinasi wisata',
                
                ],
                [
                    'code' => 'A2',
                    'sub_desc' => 'Palemahan',
                    'description' => 'Perbaikan fasilitas',
                    
                ],
                [
                    'code' => 'A3',
                    'sub_desc' => 'Pawongan',
                    'description' => 'Sumber Daya Manusia',
                    
                ],
                [
                    'code' => 'A4',
                    'sub_desc' => 'Palemahan & Pawongan',
                    'description' => 'Sinergi',
                    
                ],
                [
                    'code' => 'A5',
                    'sub_desc' => 'Palemahan',
                    'description' => 'Pelestarian lingkungan',
                    
                ],
                [
                    'code' => 'A6',
                    'sub_desc' => 'Parahyangan',
                    'description' => 'Pengaturan tempat suci',
                    
                ]    
           
            )
        );
    }
}
