<?php

use Illuminate\Database\Seeder;
use App\Artist;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             
        //Define data
       $artists = [
            ['firstname'=>'Bob','lastname'=>'Sull'],
            ['firstname'=>'Marc','lastname'=>'Flynn'],
            ['firstname'=>'Fred','lastname'=>'Durand'],
        ];
        
        //Insert data in the table
        foreach ($artists as $data) {     
            DB::table('artists')->insert([
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
            ]);

        }
    }
}
