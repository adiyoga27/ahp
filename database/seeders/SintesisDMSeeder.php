<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SintesisDMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sintesis_dm')->insert(
            array(
            [
                'dm_id' => 1,
                'col_criteria' => 'K1',
                'row_criteria' => 'K1',
                'amount' => 1,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K2',
                'row_criteria' => 'K1',
                'amount' => 1,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K3',
                'row_criteria' => 'K1',
                'amount' => 5,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K4',
                'row_criteria' => 'K1',
                'amount' => 1,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K5',
                'row_criteria' => 'K1',
                'amount' => 5,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K6',
                'row_criteria' => 'K1',
                'amount' => 3,
            ],

            // Row 2
            [
                'dm_id' => 1,
                'col_criteria' => 'K1',
                'row_criteria' => 'K2',
                'amount' => 1,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K2',
                'row_criteria' => 'K2',
                'amount' => 1,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K3',
                'row_criteria' => 'K2',
                'amount' => 4,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K4',
                'row_criteria' => 'K2',
                'amount' => 1,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K5',
                'row_criteria' => 'K2',
                'amount' => 3,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K6',
                'row_criteria' => 'K2',
                'amount' => 3,
            ],

            // Row 3
            [
                'dm_id' => 1,
                'col_criteria' => 'K1',
                'row_criteria' => 'K3',
                'amount' => 0.2,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K2',
                'row_criteria' => 'K3',
                'amount' => 0.25,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K3',
                'row_criteria' => 'K3',
                'amount' => 1,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K4',
                'row_criteria' => 'K3',
                'amount' => 1,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K5',
                'row_criteria' => 'K3',
                'amount' => 3,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K6',
                'row_criteria' => 'K3',
                'amount' => 3,
            ],
            // Row 4
            [
                'dm_id' => 1,
                'col_criteria' => 'K1',
                'row_criteria' => 'K4',
                'amount' => 1,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K2',
                'row_criteria' => 'K4',
                'amount' => 1,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K3',
                'row_criteria' => 'K4',
                'amount' => 1,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K4',
                'row_criteria' => 'K4',
                'amount' => 1,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K5',
                'row_criteria' => 'K4',
                'amount' => 5,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K6',
                'row_criteria' => 'K4',
                'amount' => 3,
            ],

             // Row 5
             [
                'dm_id' => 1,
                'col_criteria' => 'K1',
                'row_criteria' => 'K5',
                'amount' => 0.2,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K2',
                'row_criteria' => 'K5',
                'amount' => 0.333,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K3',
                'row_criteria' => 'K5',
                'amount' => 0.333,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K4',
                'row_criteria' => 'K5',
                'amount' => 0.2,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K5',
                'row_criteria' => 'K5',
                'amount' => 1,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K6',
                'row_criteria' => 'K5',
                'amount' => 2,
            ],

            // Row 6
            [
                'dm_id' => 1,
                'col_criteria' => 'K1',
                'row_criteria' => 'K6',
                'amount' => 0.333,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K2',
                'row_criteria' => 'K6',
                'amount' => 0.333,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K3',
                'row_criteria' => 'K6',
                'amount' => 0.333,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K4',
                'row_criteria' => 'K6',
                'amount' => 0.333,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K5',
                'row_criteria' => 'K6',
                'amount' => 0.5,
            ],
            [
                'dm_id' => 1,
                'col_criteria' => 'K6',
                'row_criteria' => 'K6',
                'amount' => 1,
            ],
        ));

        /////================DM 2

        DB::table('sintesis_dm')->insert(
            array(
            [
                'dm_id' => 2,
                'col_criteria' => 'K1',
                'row_criteria' => 'K1',
                'amount' => 1,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K2',
                'row_criteria' => 'K1',
                'amount' => 1,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K3',
                'row_criteria' => 'K1',
                'amount' => 5,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K4',
                'row_criteria' => 'K1',
                'amount' => 1,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K5',
                'row_criteria' => 'K1',
                'amount' => 5,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K6',
                'row_criteria' => 'K1',
                'amount' => 3,
            ],

            // Row 2
            [
                'dm_id' => 2,
                'col_criteria' => 'K1',
                'row_criteria' => 'K2',
                'amount' => 1,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K2',
                'row_criteria' => 'K2',
                'amount' => 1,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K3',
                'row_criteria' => 'K2',
                'amount' => 4,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K4',
                'row_criteria' => 'K2',
                'amount' => 1,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K5',
                'row_criteria' => 'K2',
                'amount' => 3,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K6',
                'row_criteria' => 'K2',
                'amount' => 3,
            ],

            // Row 3
            [
                'dm_id' => 2,
                'col_criteria' => 'K1',
                'row_criteria' => 'K3',
                'amount' => 0.2,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K2',
                'row_criteria' => 'K3',
                'amount' => 0.25,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K3',
                'row_criteria' => 'K3',
                'amount' => 1,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K4',
                'row_criteria' => 'K3',
                'amount' => 1,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K5',
                'row_criteria' => 'K3',
                'amount' => 3,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K6',
                'row_criteria' => 'K3',
                'amount' => 3,
            ],
            // Row 4
            [
                'dm_id' => 2,
                'col_criteria' => 'K1',
                'row_criteria' => 'K4',
                'amount' => 1,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K2',
                'row_criteria' => 'K4',
                'amount' => 1,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K3',
                'row_criteria' => 'K4',
                'amount' => 1,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K4',
                'row_criteria' => 'K4',
                'amount' => 1,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K5',
                'row_criteria' => 'K4',
                'amount' => 5,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K6',
                'row_criteria' => 'K4',
                'amount' => 3,
            ],

             // Row 5
             [
                'dm_id' => 2,
                'col_criteria' => 'K1',
                'row_criteria' => 'K5',
                'amount' => 0.2,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K2',
                'row_criteria' => 'K5',
                'amount' => 0.333,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K3',
                'row_criteria' => 'K5',
                'amount' => 0.333,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K4',
                'row_criteria' => 'K5',
                'amount' => 0.2,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K5',
                'row_criteria' => 'K5',
                'amount' => 1,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K6',
                'row_criteria' => 'K5',
                'amount' => 2,
            ],

            // Row 6
            [
                'dm_id' => 2,
                'col_criteria' => 'K1',
                'row_criteria' => 'K6',
                'amount' => 0.333,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K2',
                'row_criteria' => 'K6',
                'amount' => 0.333,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K3',
                'row_criteria' => 'K6',
                'amount' => 0.333,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K4',
                'row_criteria' => 'K6',
                'amount' => 0.333,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K5',
                'row_criteria' => 'K6',
                'amount' => 0.5,
            ],
            [
                'dm_id' => 2,
                'col_criteria' => 'K6',
                'row_criteria' => 'K6',
                'amount' => 1,
            ],
        ));
    }
}
