<?php

use Illuminate\Database\Seeder;

class SeedGamesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([

            'title' => "Gran Turismo 7" ,
            'abstract' => ' Gran Turismo Sport is the world’s first racing experience to be built from the ground up to bring global, online competitions sanctioned by the highest governing body of international. ',
            'body'=> '
                        <p> More than 120 cars have been added to the lineup, putting the number of available cars to 1200-plus. The large selection of cars include those from the popular FIA GT3 category, which have become the mainstay of GT racing today.</p>

                       ',
            'image' => 'gt-small.jpg',
            'rating' => 'everyone',
            'year' => 2021,
            'category_id' => 1

        ]);

        DB::table('games')->insert([

            'title' => "Mario Bros" ,
            'abstract' => ' Join Mario, Luigi, and pals for single-player or multiplayer fun anytime, anywhere! Take on two family-friendly, side-scrolling adventures with up to three friends* as you try to save the Mushroom Kingdom.',
            'body'=> '
                    <p>
                    Join Mario, Luigi, and pals for single-player or multiplayer fun anytime, anywhere! Take on two family-friendly, side-scrolling adventures with up to three friends* as you try to save the Mushroom Kingdom. Includes the New Super Mario Bros. U and harder, faster New Super Luigi U games—both of which include Nabbit and Toadette as playable characters!<br><br>Two games in one, for double the fun! Simple, straightforward controls.</p>',
            'image' => 'mario1-small.jpg',
            'rating' => 'everyone',
            'year' => 2011,
            'category_id' => 2

        ]);

        DB::table('games')->insert([

            'title' => "Super Mario" ,
            'abstract' => '25th Edition, Let your imagination run wild with new tools, course parts, and features. This sequel to the Super Mario Maker game launches exclusively on the Nintendo Switch system. ',
            'body'=> '<p>Let your imagination run wild with new tools, course parts, and features. This sequel to the Super Mario Maker game launches exclusively on the Nintendo Switch system.</p>',
            'image' => 'mario2-small.jpg',
            'rating' => 'everyone',
            'year' => 2017,
            'category_id' => 2

        ]);

        DB::table('games')->insert([

            'title' => "Metal Gear Solid" ,
            'abstract' => ' The first game, Metal Gear, was released in 1987 for MSX home computers. The player often takes control of a special forces operative (usually Solid Snake or Big Boss). Explore the open vast Sahara.',
            'body'=> '<p>Then Hideo Kojima was a young boy, his parents introduced a daily ritual. Each evening, the family would sit down to watch a movie together. Kojima wasn’t allowed to go to bed till the film had finished, even if it contained sex scenes. His experience was, he has said, the “opposite” of how it is for most children. Those kids had to finish their cauliflower. Kojima had to finish his Coppola.<br></p>',
            'image' => 'mg-small.jpg',
            'rating' => 'mature',
            'year' => 2018,
            'category_id' => 2

        ]);

        DB::table('games')->insert([

            'title' => "Mario Kart 7" ,
            'abstract' => ' The newest installment of the fan-favorite Mario Kart™ franchise brings Mushroom Kingdom racing fun into glorious 3D. For the first time, drivers explore new competitive kart possibilities',
            'body'=> '<p>The newest installment of the fan-favorite Mario Kart™ franchise brings Mushroom Kingdom racing fun into glorious 3D. For the first time, drivers explore new competitive kart possibilities, such as soaring through the skies or plunging into the depths of the sea. New courses, strategic new abilities and customizable karts bring the racing excitement to new heights.</p>',
            'image' => 'mk-small.jpg',
            'rating' => 'everyone',
            'year' => 2021,
            'category_id' => 1

        ]);

        DB::table('games')->insert([

            'title' => "PGA Tour 2K21" ,
            'abstract' => 'Golf without limits in EA SPORTS Rory McIlroy PGA TOUR. Usher in the next generation of golf with the power of the Frostbite 3 engine and play the most beautiful sports game to date.',
            'body'=> '<p> Golf without limits in EA SPORTS Rory McIlroy PGA TOUR. Usher in the next generation of golf with the power of the Frostbite 3 engine and play the most beautiful sports game to date with no load times, enabling you to explore authentic tournament courses or unique fantasy environments, opening up your golf experience like never before. Don’t just play the course, explore it!</p>',
            'image' => 'pga.jpg',
            'rating' => 'everyone',
            'year' => 2019,
            'category_id' => 5

        ]);

        DB::table('games')->insert([

            'title' => "Assassin's Creed" ,
            'abstract' => 'Assassins Creed is an action-adventure stealth video game franchise published by Ubisoft and developed, mainly, by Ubisoft Montreal using the game engine Anvil and its more advanced derivatives. Created by Patrice Désilets.',
            'body'=> '<p> England in the age of the Vikings is a fractured nation of petty lords and warring kingdoms. Beneath the chaos lies a rich and untamed land waiting for a new conqueror.Become Eivor, a mighty Viking raider and lead your clan from the harsh shores of Norway to a new home amid the lush farmlands of ninth-century England. Explore a beautiful, mysterious open world where you will ll face brutal enemies, raid fortresses, build your clans new settlement, and forge alliances to win glory and earn a place in Valhalla. </p>',
            'image' => 'ac1.jpg',
            'rating' => 'everyone',
            'year' => 2021,
            'category_id' => 4

        ]);

        DB::table('games')->insert([

            'title' => "Battlefield 4" ,
            'abstract' => ' Battlefield 4™ is the genre-defining action blockbuster made from moments that blur the line between game and glory. Fueled by the next-generation power and fidelity of Frostbite™ 3, Battlefield 4 provides a visceral, dramatic experience.',
            'body'=> '<p>Embrace unrivaled destruction in Battlefield 4™. Revel in the glorious chaos of all-out war packed with rewarding, tactical challenges in an interactive environment.</p>',
            'image' => 'bf.jpg',
            'rating' => 'mature',
            'year' => 2016,
            'category_id' => 3

        ]);

        DB::table('games')->insert([

            'title' => "Fifa 19 " ,
            'abstract' => 'Powered by Frostbite™, EA SPORTS™ FIFA 19 for PlayStation®4 brings two sides of The World’s Game to life - the prestige of the professional stage and an all-new authentic street football experience in EA SPORTS VOLTA FOOTBALL. ',
            'body'=> '<p>From title challenges to relegation scraps, there’s still lots to play for this season. Get ready for the return of The World’s Game by celebrating the best players from 2019/20 with the FIFA 19 Team of the Season So Far.</p>',
            'image' => 'fifa.jpg',
            'rating' => 'everyone',
            'year' => 2020,
            'category_id' => 5

        ]);

        DB::table('games')->insert([

            'title' => "Call of Duty" ,
            'abstract' => ' Experience a visceral Campaign or assemble your team in the ultimate online playground with multiple Special Ops challenges, a mix of Multiplayer maps and modes, and the franchises premiere Battle Pass system.',
            'body'=> '<p>Play the blockbuster Campaign, engage in thrilling Multiplayer combat, squad up in cooperative Special Ops experiences, and drop into the massive Battle Royale arena with Warzone.</p>',
            'image' => 'cod.jpg',
            'rating' => 'mature',
            'year' => 2018,
            'category_id' => 3

        ]);


    }
}
