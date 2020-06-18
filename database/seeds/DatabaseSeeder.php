<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            /* UsersTableSeeder::class,*/
            AgenciesTableSeeder::class,
            ArtistsTableSeeder::class,
            LocalitiesTableSeeder::class,
            LocationsTableSeeder::class,
            ShowsTableSeeder::class,
            RepresentationsTableSeeder::class,
            TypesTableSeeder::class,
            RolesTableSeeder::class,
            ArtistTypesTableSeeder::class,
            RepresentationUserTableSeeder::class,
            ArtistTypeShowsTableSeeder::class,
        ]);
    }
}
