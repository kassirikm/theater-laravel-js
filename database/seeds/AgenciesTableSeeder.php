<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Agency;

class AgenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empty the table first
        //Only do this in dev mode, not in production mode (why?)
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Agency::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        /*
        $agencies = [
        DB::table('agencies')->insert([
            'name' => Str::random(10),
        ])
        */
        // Define data
        /*
        $agencies = [
            ['name' => 'DistrArt'],
            ['name' => 'Aartis'],
            ['name' => 'Crossing'],
            ['name' => 'A2'],
            ['name' => 'Artcine'],
        */

            // Use a factory to build multiple agency with a relationship attached to each user
            // Need to define factory first in order to work
            /*
            factory(App\Agency::class, 5)->create()->each(function ($agency) {
                $agency->artists()->save(factory(App\Artist::class)->make());
            });
            */
        /*
            ];

       */


        DB::table('agencies')->insert([
            'name' => 'DistrArt',
        ]);

        DB::table('agencies')->insert([
            'name' => 'Aartis',
        ]);

        DB::table('agencies')->insert([
            'name' => 'Crossing',
        ]);

        DB::table('agencies')->insert([
            'name' => 'A2',
        ]);

        DB::table('agencies')->insert([
            'name' => 'Artcine',
        ]);

        //Insert data in the table
        /*
        foreach ($agencies as $data)
        {
            DB::table('agencies')->insert([
                'name' => $data['name'],
            ]);
        }
        */
    }
}
