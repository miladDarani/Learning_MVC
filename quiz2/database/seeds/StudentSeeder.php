<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([

            'student_number' => "12345" ,
            'first_name' => ' Milad',
            'last_name'=> 'Darani',
            'image' => '/../../public/images/1.jpg',
            'email' => 'milad.darani@hotmail.com'

        ]);

        DB::table('students')->insert([

            'student_number' => "21546" ,
            'first_name' => ' Mike',
            'last_name'=> 'Jones',
            'image' => '/../../public/images/2.jpg',
            'email' => 'mike.jones@hotmail.com'

        ]);

        DB::table('students')->insert([

            'student_number' => "85476" ,
            'first_name' => ' James',
            'last_name'=> 'Billi',
            'image' => '/../../public/images/3.jpg',
            'email' => 'james.billi@hotmail.com'

        ]);

        DB::table('students')->insert([

            'student_number' => "65897" ,
            'first_name' => ' Adam',
            'last_name'=> 'Shaves',
            'image' => '/../../public/images/4.jpg',
            'email' => 'adam.shaves@hotmail.com'

        ]);

        DB::table('students')->insert([

            'student_number' => "58475" ,
            'first_name' => ' Sean',
            'last_name'=> 'Johm',
            'image' => '/../../public/images/5.jpg',
            'email' => 'sean.john@hotmail.com'

        ]);
    }
}
