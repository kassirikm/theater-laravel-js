<?php

use Illuminate\Database\Seeder;
use App\Show;
use App\Location;

class ShowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //Define data
        $shows = [
            [
                'slug'=>null,
                'title'=>'Ayiti',
                'poster_url'=>'ayiti.jpg',
                'location_slug'=>'espace-delvaux-la-venerie',
                'bookable'=>true,
                'price'=>8.50,
            ],
           [
                'slug'=>null,
                'title'=>'Cible mouvante',
                'poster_url'=>'cible.jpg',
                'location_slug'=>'dexia-art-center',
                'bookable'=>true,
                'price'=>9.00,
            ],
            [
                'slug'=>null,
                'title'=>'Ceci n\'est pas un chanteur belge',
                'poster_url'=>'claudebelgesaison220.jpg',
                'location_slug'=>null,
                'bookable'=>false,
                'price'=>5.50,
            ],
            [
                'slug'=>null,
                'title'=>'Nouveau spectacle de Pierre Wayburn',
                'poster_url'=>'wayburn.jpg',
                'location_slug'=>'la-samaritaine',
                'bookable'=>true,
                'price'=>10.50,
            ],
        ];
        
        //Insert data in the table
        foreach ($shows as $data) {
            $location = Location::firstWhere('slug',$data['location_slug']);
            
            DB::table('shows')->insert([
                'slug' => Str::slug($data['title'],'-'),
                'title' => $data['title'],
                'poster_url' => $data['poster_url'],
                'location_id' => $location->id ?? null,
                'bookable' => $data['bookable'],
                'price' => $data['price'],
            ]);
        }
       
    }
}
