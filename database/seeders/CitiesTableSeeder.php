<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'juigalpa',
                'created_at' => '2021-08-12 16:00:29',
                'updated_at' => '2021-08-12 16:00:29',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Brasil',
                'created_at' => '2021-08-12 16:00:29',
                'updated_at' => '2021-08-12 16:00:29',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Ecuador',
                'created_at' => '2021-08-12 16:00:29',
                'updated_at' => '2021-08-12 16:00:29',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Puerto Rico',
                'created_at' => '2021-08-12 16:00:29',
                'updated_at' => '2021-08-12 16:00:29',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'London',
                'created_at' => '2021-08-12 16:00:29',
                'updated_at' => '2021-08-12 16:00:29',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Panama',
                'created_at' => '2021-08-12 16:00:29',
                'updated_at' => '2021-08-12 16:00:29',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Inglaterra',
                'created_at' => '2021-08-12 16:00:29',
                'updated_at' => '2021-08-12 16:00:29',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Francia',
                'created_at' => '2021-08-12 16:00:29',
                'updated_at' => '2021-08-12 16:00:29',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Rusia',
                'created_at' => '2021-08-12 16:00:29',
                'updated_at' => '2021-08-12 16:00:29',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'China',
                'created_at' => '2021-08-12 16:00:29',
                'updated_at' => '2021-08-12 16:00:29',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Colombia',
                'created_at' => '2021-08-12 16:00:29',
                'updated_at' => '2021-08-12 16:00:29',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Argentina',
                'created_at' => '2021-08-12 16:00:29',
                'updated_at' => '2021-08-12 16:00:29',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Costa Rica',
                'created_at' => '2021-08-12 16:00:29',
                'updated_at' => '2021-08-12 16:00:29',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Venezuela',
                'created_at' => '2021-08-12 16:00:29',
                'updated_at' => '2021-08-12 16:00:29',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Honduras',
                'created_at' => '2021-08-12 16:00:29',
                'updated_at' => '2021-08-12 16:00:29',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'El Salvador',
                'created_at' => '2021-08-12 16:00:29',
                'updated_at' => '2021-08-12 16:00:29',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Peru',
                'created_at' => '2021-08-12 16:00:29',
                'updated_at' => '2021-08-12 16:00:29',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Turkia',
                'created_at' => '2021-08-12 16:00:29',
                'updated_at' => '2021-08-12 16:00:29',
            ),
        ));
        
        
    }
}