<?php

use Illuminate\Database\Seeder;

class SeedCategoriesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([

            'name' => 'Racing'
        ]);

        DB::table('categories')->insert([

            'name' => 'Adventure'
        ]);

        DB::table('categories')->insert([

            'name' => 'First Person Shooter'
        ]);

        DB::table('categories')->insert([

            'name' => 'Action'
        ]);

        DB::table('categories')->insert([

            'name' => 'Sports'
        ]);




    }
}
