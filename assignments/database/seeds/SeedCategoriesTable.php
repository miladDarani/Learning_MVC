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

            'name' => 'racing'
        ]);

        DB::table('categories')->insert([

            'name' => 'adventure'
        ]);

        DB::table('categories')->insert([

            'name' => 'fps'
        ]);

        DB::table('categories')->insert([

            'name' => 'action'
        ]);

        DB::table('categories')->insert([

            'name' => 'sports'
        ]);




    }
}
