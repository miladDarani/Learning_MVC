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

            'name' => 'Uncategorized'
        ]);

        DB::table('categories')->insert([

            'name' => 'Post'
        ]);

        DB::table('categories')->insert([

            'name' => 'Tweet'
        ]);

        DB::table('categories')->insert([

            'name' => 'Article'
        ]);

        DB::table('categories')->insert([

            'name' => 'Page'
        ]);

    }
}
