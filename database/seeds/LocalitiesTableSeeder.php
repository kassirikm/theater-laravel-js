<?php

use Illuminate\Database\Seeder;

class LocalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
