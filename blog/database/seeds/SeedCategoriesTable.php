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

            'name' => 'post'
        ]);

        DB::table('categories')->insert([

            'name' => 'tweet'
        ]);

        DB::table('categories')->insert([

            'name' => 'article'
        ]);

        DB::table('categories')->insert([

            'name' => 'page'
        ]);

    }
}
