<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriteriaDMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $dm1 = array(
            [
                'criteria_code' => 'K1',
                'dm_id'=> 1,
                'attribute'  => 'cost',
                'description' => 'Perbaikan dan perawatan tempat suci'
            ],[
                'criteria_code' => 'K2',
                'dm_id'=> 1,
                'attribute'  => 'cost',
                'description' => 'Arsitektur tradisional Bali'
            ],[
                'criteria_code' => 'K3',
                'dm_id'=> 1,
                'attribute'  => 'benefit',
                'description' => 'Pengetahuan masyarakat'
            ],[
                'criteria_code' => 'K4',
                'dm_id'=> 1,
                'attribute'  => 'benefit',
                'description' => 'Penggunaan simbol-simbol keagamaan'
            ],[
                'criteria_code' => 'K5',
                'dm_id'=> 1,
                'attribute'  => 'benefit',
                'description' => 'Daya tarik wisata'
            ],[
                'criteria_code' => 'K6',
                'dm_id'=> 1,
                'attribute'  => 'benefit',
                'description' => 'Zona hijau'
            ],
            
        );

        $dm2 = array(
            [
                'criteria_code' => 'K1',
                'dm_id'=> 2,
                'attribute'  => 'benefit',
                'description' => 'Pengetahuan masyarakat'
            ],[
                'criteria_code' => 'K2',
                'dm_id'=> 2,
                'attribute'  => 'benefit',
                'description' => 'Keterampilan masyarakat'
            ],[
                'criteria_code' => 'K3',
                'dm_id'=> 2,
                'attribute'  => 'benefit',
                'description' => 'Kesejahteraan masyarakat'
            ],[
                'criteria_code' => 'K4',
                'dm_id'=> 2,
                'attribute'  => 'cost',
                'description' => 'Pengelolaan destinasi wisata '
            ],[
                'criteria_code' => 'K5',
                'dm_id'=> 2,
                'attribute'  => 'benefit',
                'description' => 'Pelatihan dan kunjungan dari pemerintah provinsi Bali'
            ],[
                'criteria_code' => 'K6',
                'dm_id'=> 2,
                'attribute'  => 'benefit',
                'description' => 'Sasaran wisatawan'
            ],
            
        );
        $dm3 = array(
            [
                'criteria_code' => 'K1',
                'dm_id'=> 3,
                'attribute'  => 'benefit',
                'description' => 'Aksesbilitas'
            ],[
                'criteria_code' => 'K2',
                'dm_id'=> 3,
                'attribute'  => 'benefit',
                'description' => 'Fasilitas umum'
            ],[
                'criteria_code' => 'K3',
                'dm_id'=> 3,
                'attribute'  => 'benefit',
                'description' => 'Zona hijau'
            ],[
                'criteria_code' => 'K4',
                'dm_id'=> 3,
                'attribute'  => 'cost',
                'description' => 'Pengelolaan destinasi wisata'
            ],[
                'criteria_code' => 'K5',
                'dm_id'=> 3,
                'attribute'  => 'benefit',
                'description' => 'Pelatihan dan kunjungan dari pemerintah provinsi Bali'
            ],[
                'criteria_code' => 'K6',
                'dm_id'=> 3,
                'attribute'  => 'benefit',
                'description' => 'Sasaran wisatawan'
            ],[
                'criteria_code' => 'K7',
                'dm_id'=> 3,
                'attribute'  => 'cost',
                'description' => 'Perbaikan dan perawatan tempat suci'
            ]
            
        );
        DB::table('dm_criteria')->insert($dm1);
        DB::table('dm_criteria')->insert($dm2);
        DB::table('dm_criteria')->insert($dm3);

    }
}
