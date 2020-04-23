<?php

use Illuminate\Database\Seeder;

class ShowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shows')->insert([
            'slug' => 'test1',
            'title' => 'Dom Juan',
            'poster_url' => 'test',
            'bookable' => 1,
            'price' => 15.5,
            'location_id' => 1,
        ]);

        DB::table('shows')->insert([
            'slug' => 'test2',
            'title' => 'Le Malade imaginaire',
            'poster_url' => 'test',
            'bookable' => 0,
            'price' => 21,
            'location_id' => 3,
        ]);

        DB::table('shows')->insert([
            'slug' => 'test3',
            'title' => 'Les Femmes savantes',
            'poster_url' => 'test',
            'bookable' => 1,
            'price' => 25.5,
            'location_id' => 2,
        ]);
    }
}
