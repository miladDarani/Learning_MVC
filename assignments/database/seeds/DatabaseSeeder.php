<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SeedGamesTable::class);
        $this->call(SeedCategoriesTable::class);
        $this->call(SeedUsersTable::class);
    }
}
