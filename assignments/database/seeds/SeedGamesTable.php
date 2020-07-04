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
            'abstract' => ' A Driving Simulator',
            'body'=> '<div class="txt-area">
                        <h3>For the 15th Anniversary of the Series:<br>Vision Gran Turismo</h3>

                        <h4>Including more than 1200 cars</h4>
                        <p>More than 120 cars have been added to the lineup, putting the number of available cars to 1200-plus. The large selection of cars include those from the popular FIA GT3 category, which have become the mainstay of GT racing today.</p>

                        <h4>Includes 40 Locations, 107 layouts</h4>
                        <p>In addition to new tracks such as Mt. Panorama, Silverstone, Brands Hatch, Willow Springs Raceway and Red Bull Ring, original tracks including Apricot Hill and Mid-Field Raceway have made a comeback in this version of the game.</p>

                        <h4>Online</h4>
                        <p>In addition to official Seasonal Events, an Open Lobby invites players to race online and communicate with others, Among the features offered are quick matches with preset regulations for easy online matching and racing, as well as community sites where players can form their own clubs to create and enjoy race events.</p>

                            <h4>Career Mode</h4>
                            <p>In this main facet of this game where players begin from the entry level and gradually acquire higher level licenses, a new system has been introduced where players collect ‘stars’ to progress, allowing those with different skill levels to enjoy the game at their own pace. Many types of events have been made available, including those where the weather conditions change continuously and recreate the feeling of endurance races in a much shorter period of time. Winning events will award in-game credits that can be used to purchase cars and parts.</p>

                            <h4>B-Spec</h4>
                            <p>B-Spec mode, where an AI driver races for the player, has been implemented in all Career Mode race events. You can use B-Spec for races that you may find difficult completing, such as some of the longer endurance races. Or you can use it when you just want to enjoy watching a race. B-Spec can be selected from the Quick Menu displayed before the start of an event race in Career Mode.</p>',
            'image' => 'gt-small.jpg',
            'rating' => 'everyone',
            'year' => 2021,
            'category_id' => 1

        ]);

        DB::table('games')->insert([

            'title' => "Mario Bros" ,
            'abstract' => ' Adventures of Mario',
            'body'=> '
                    <p>
                    Join Mario, Luigi, and pals for single-player or multiplayer fun anytime, anywhere! Take on two family-friendly, side-scrolling adventures with up to three friends* as you try to save the Mushroom Kingdom. Includes the New Super Mario Bros. U and harder, faster New Super Luigi U games—both of which include Nabbit and Toadette as playable characters!<br><br>Two games in one, for double the fun! Simple, straightforward controls.</p>',
            'image' => 'mario1-small.jpg',
            'rating' => 'everyone',
            'year' => 2011,
            'category_id' => 3

        ]);

        DB::table('games')->insert([

            'title' => "Super Mario" ,
            'abstract' => '25th Edition ',
            'body'=> '<p class="vp-fade-up--20 vp-delay--2">Let your imagination run wild with new tools, course parts, and features. This sequel to the Super Mario Maker game launches exclusively on the Nintendo Switch system.</p>',
            'image' => 'mario2-small.jpg',
            'rating' => 'everyone',
            'year' => 2017,
            'category_id' => 3

        ]);

        DB::table('games')->insert([

            'title' => "Metal Gear Solid" ,
            'abstract' => ' A Stealth Action Game',
            'body'=> '<p><span class="drop-cap"><span class="drop-cap__inner">W</span></span>hen Hideo Kojima was a young boy, his parents introduced a daily ritual. Each evening, the family would sit down to watch a movie together. Kojima wasn’t allowed to go to bed till the film had finished, even if it contained sex scenes. His experience was, he has said, the “opposite” of how it is for most children. Those kids had to finish their cauliflower. Kojima had to finish his Coppola.<br></p>',
            'image' => 'mg-small.jpg',
            'rating' => 'mature',
            'year' => 2018,
            'category_id' => 2

        ]);

        DB::table('games')->insert([

            'title' => "Mario Kart 7" ,
            'abstract' => ' Action Racing Game',
            'body'=> '<p>The newest installment of the fan-favorite Mario Kart™ franchise brings Mushroom Kingdom racing fun into glorious 3D. For the first time, drivers explore new competitive kart possibilities, such as soaring through the skies or plunging into the depths of the sea. New courses, strategic new abilities and customizable karts bring the racing excitement to new heights.</p>',
            'image' => 'mk-small.jpg',
            'rating' => 'everyone',
            'year' => 2021,
            'category_id' => 1

        ]);

        DB::table('games')->insert([

            'title' => "Gran Turismo 7" ,
            'abstract' => ' A Driving Simulator',
            'body'=> '<div class="txt-area">
                        <h3>For the 15th Anniversary of the Series:<br>Vision Gran Turismo</h3>

                        <h4>Including more than 1200 cars</h4>
                        <p>More than 120 cars have been added to the lineup, putting the number of available cars to 1200-plus. The large selection of cars include those from the popular FIA GT3 category, which have become the mainstay of GT racing today.</p>

                        <h4>Includes 40 Locations, 107 layouts</h4>
                        <p>In addition to new tracks such as Mt. Panorama, Silverstone, Brands Hatch, Willow Springs Raceway and Red Bull Ring, original tracks including Apricot Hill and Mid-Field Raceway have made a comeback in this version of the game.</p>',
            'image' => 'gt-small.jpg',
            'rating' => 'everyone',
            'year' => 2019,
            'category_id' => 1

        ]);

        DB::table('games')->insert([

            'title' => "Assassin's Creed" ,
            'abstract' => 'England in the age of the Vikings is a fractured nation of petty lords and warring kingdoms. Beneath the chaos lies a rich and untamed land waiting for a new conqueror',
            'body'=> '<p>Become Eivor, a mighty Viking raider and lead your clan from the harsh shores of Norway to a new home amid the lush farmlands of ninth-century England. Explore a beautiful, mysterious open world where you will ll face brutal enemies, raid fortresses, build your clans new settlement, and forge alliances to win glory and earn a place in Valhalla. </p>',
            'image' => 'gt-small.jpg',
            'rating' => 'everyone',
            'year' => 2021,
            'category_id' => 1

        ]);

        DB::table('games')->insert([

            'title' => "Battlefield 4" ,
            'abstract' => ' genre-defining action blockbuster',
            'body'=> '<p>Embrace unrivaled destruction in Battlefield 4™. Revel in the glorious chaos of all-out war packed with rewarding, tactical challenges in an interactive environment.</p>',
            'image' => 'bf.jpg',
            'rating' => 'mature',
            'year' => 2016,
            'category_id' => 4

        ]);

        DB::table('games')->insert([

            'title' => "Fifa 20 " ,
            'abstract' => '',
            'body'=> '<p>From title challenges to relegation scraps, there’s still lots to play for this season. Get ready for the return of The World’s Game by celebrating the best players from 2019/20 with the FIFA 20 Team of the Season So Far.</p>',
            'image' => 'fifa.jpg',
            'rating' => 'everyone',
            'year' => 2020,
            'category_id' => 4

        ]);

        DB::table('games')->insert([

            'title' => "Call of Duty" ,
            'abstract' => ' Modern Warfare',
            'body'=> '<p>Play the blockbuster Campaign, engage in thrilling Multiplayer combat, squad up in cooperative Special Ops experiences, and drop into the massive Battle Royale arena with Warzone.</p>',
            'image' => 'cod.jpg',
            'rating' => 'mature',
            'year' => 2018,
            'category_id' => 4

        ]);


    }
}
