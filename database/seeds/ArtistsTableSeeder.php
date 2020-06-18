<?php

use Illuminate\Database\Seeder;
// Import the Agency class
use App\Artist;
use App\Agency;


class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        ///Empty the table first
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Artist::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        //Define data
       $artists = [
            [
                'firstname'=>'Daniel',
                'lastname'=>'Marcelin',
                'agency_name'=>'DistrArt',
            ],
            [
                'firstname'=>'Philippe',
                'lastname'=>'Laurent',
                'agency_name'=>'DistrArt',
            ],
            [   'firstname'=>'Marius',
                'lastname'=>'Von Mayenburg',
                'agency_name'=>'DistrArt',
            ],
            [   'firstname'=>'Olivier',
                'lastname'=>'Boudon',
                'agency_name'=>'Aartis',
            ],
            [   'firstname'=>'Anne Marie',
                'lastname'=>'Loop',
                'agency_name'=>'Aartis',
            ],
            [   'firstname'=>'Pietro',
                'lastname'=>'Varasso',
                'agency_name'=>'Aartis',
            ],
            [   'firstname'=>'Laurent',
                'lastname'=>'Caron',
                'agency_name'=>'A2',
            ],
            [   'firstname'=>'Élena',
                'lastname'=>'Perez',
                'agency_name'=>'A2',
            ],
            [   'firstname'=>'Guillaume',
                'lastname'=>'Alexandre',
                'agency_name'=>'A2',
            ],
            [   'firstname'=>'Claude',
                'lastname'=>'Semal',
                'agency_name'=>'DistrArt',
            ],
            [   'firstname'=>'Laurence',
                'lastname'=>'Warin',
                'agency_name'=>'DistrArt',
            ],
            [   'firstname'=>'Pierre',
                'lastname'=>'Wayburn',
                'agency_name'=>'DistrArt',
            ],
            [   'firstname'=>'Gwendoline',
                'lastname'=>'Gauthier',
                'agency_name'=>'DistrArt',
            ],
            [   'firstname'=>'Philippe',
                'lastname'=>'Laurent',
                'agency_name'=>'DistrArt',
            ],
        ];
        
        //Insert data in the table
        foreach ($artists as $data) {
            // Create a variable so we can use the name instead of the id
            $agency = Agency::firstWhere('name',$data['agency_name']);

            DB::table('artists')->insert([
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'agency_id' => $agency->id,	//Référence à la table agencies
            ]);
        }
    }
}
