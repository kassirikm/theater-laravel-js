<?php

use Illuminate\Database\Seeder;
Use App\Representation;
use App\Location;
use App\Show;


class RepresentationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
               //Define data
        $representations = [
            [
                'location_slug'=>'espace-delvaux-la-venerie',
                'show_slug'=>'ayiti',
                'when'=>'2012-10-12 13:30',
            ],
            [
                'location_slug'=>'dexia-art-center',
                'show_slug'=>'ayiti',
                'when'=>'2012-10-12 20:30',
            ],
            [
                'location_slug'=>null,
                'show_slug'=>'cible-mouvante',
                'when'=>'2012-10-02 20:30',
            ],
            [
                'location_slug'=>null,
                'show_slug'=>'ceci-nest-pas-un-chanteur-belge',
                'when'=>'2012-10-16 20:30',
            ],
        ];
        
        //Insert data in the table
        foreach ($representations as $data) {
            $location = Location::firstWhere('slug',$data['location_slug']);
            $show = Show::firstWhere('slug',$data['show_slug']);
            
            DB::table('representations')->insert([
                'location_id' => $location->id ?? null,
                'show_id' => $show->id,
                'when' => $data['when'],
            ]);
        }
    }
}
