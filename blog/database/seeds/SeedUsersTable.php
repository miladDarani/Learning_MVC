<?php

use Illuminate\Database\Seeder;

class SeedUsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Milad Darani",
            'email' => 'milad.darani@hotmail.com',
            'password' => password_hash('Summer21*', PASSWORD_DEFAULT),
            'is_admin' => true
        ]);

        DB::table('users')->insert([
            'name' => "Will Smith",
            'email' => 'will.smith@hotmail.com',
            'password' => password_hash('Summer21*', PASSWORD_DEFAULT)
            
        ]);
    }
}
