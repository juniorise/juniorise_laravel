<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(array (
            0 => array(
                'id' => 1,
                'name' => 'Computer Science',
                'description' => 'Computer Science'
            ),
            1 => array(
                'id' => 2,
                'name' => 'Network & Telecom',
                'description' => 'Network & Telecom'
            ),
            2 => array(
                'id' => 3,
                'name' => 'Architecture',
                'description' => 'Architecture'
            ),
            3 => array(
                'id' => 4,
                'name' => 'Civil Engineer',
                'description' => 'Civil Engineer'
            ),
            4 => array(
                'id' => 5,
                'name' => 'Doctor',
                'description' => 'Doctor'
            ),
            5 => array(
                'id' => 6,
                'name' => 'Biology Engineer',
                'description' => 'Biology Engineer'
            )
        ));
    }
}
