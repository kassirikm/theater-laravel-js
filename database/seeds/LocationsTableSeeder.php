<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'locality_id' => 4,
            'slug' => 'test',
            'designation' => 'Théâtre royal du Parc',
            'address' => 'Rue de la Loi 3',
            'website' => 'http://www.theatreduparc.be/',
            'phone' => '025053030',
        ]);

        DB::table('locations')->insert([
            'locality_id' => 1,
            'slug' => 'test',
            'designation' => 'Wolubilis',
            'address' => 'Cours Paul-Henri Spaak 1',
            'website' => 'https://www.wolubilis.be/',
            'phone' => '027616030',
        ]);

        DB::table('locations')->insert([
            'locality_id' => 3,
            'slug' => 'test',
            'designation' => 'TTO Théâtre',
            'address' => '396 - 398 Galeries de la Toison d\'Or',
            'website' => 'http://www.ttotheatre.com/',
            'phone' => '025100510',
        ]);
    }
}
