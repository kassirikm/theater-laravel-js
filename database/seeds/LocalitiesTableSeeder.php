<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Locality;


class LocalitiesTableSeeder extends Seeder

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
        Locality::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        DB::table('localities')->insert([
            'postal_code' => '1200',
            'locality' => 'Woluwe-Saint-Lambert',
        ]);

        DB::table('localities')->insert([
            'postal_code' => '1150',
            'locality' => 'Woluwe-Saint-Pierre',
        ]);

        DB::table('localities')->insert([
            'postal_code' => '1050',
            'locality' => 'Ixelles',
        ]);

        DB::table('localities')->insert([
            'postal_code' => '1000',
            'locality' => 'Bruxelles',
        ]);
        
        DB::table('localities')->insert([
            'postal_code' => '1170',
            'locality' => 'Watermael-Boitsfort',
        ]);
    }
}
