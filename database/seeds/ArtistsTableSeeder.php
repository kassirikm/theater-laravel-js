<?php

use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->insert([
            'first_name' => 'Jamel',
            'last_name' => 'Debbouze',
        ]);

        DB::table('artists')->insert([
            'first_name' => 'Omar',
            'last_name' => 'Sy',
        ]);

        DB::table('artists')->insert([
            'first_name' => 'Melissa',
            'last_name' => 'Theuriau',
        ]);

    }
}
