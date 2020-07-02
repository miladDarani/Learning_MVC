<?php

use Illuminate\Database\Seeder;

class SeedPostsTablewithFaker extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker\Factory::create();

        for($i = 0; $i < 100; $i++)
        {

            App\Post::create([
                'title' => $this->faker->sentence(4),
                'abstract' => $this->faker->sentence(50),
                'body' => $this->getParas(5),
                'featured_image' => 'https://picsum.photos/800/400',
                'created_at' => $this->faker->dateTimeBetween('-2 years', 'now'),
                'category_id' => rand(1,4 )
            ]);


        }// /for
    }// /run


    public function getParas($num)
    {
        $paras = $this->faker->paragraphs($num);
        $str = '';
        foreach($paras as $p){
            $str .= '<p>' . $p . '</p>' . "\n";

        }
        return $str;
    }
}
