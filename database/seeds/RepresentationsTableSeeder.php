<?php

use Illuminate\Database\Seeder;

class RepresentationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('representations')->insert([
            'when' => '2020-06-21 20:00:00',
            'show_id' => '1',
            'location_id' => '1',
        ]);

        DB::table('representations')->insert([
            'when' => '2020-07-01 19:00:00',
            'show_id' => '2',
            'location_id' => '3',
        ]);

        DB::table('representations')->insert([
            'when' => '2020-08-15 21:00:00',
            'show_id' => '3',
            'location_id' => '2',
        ]);
    }
}
