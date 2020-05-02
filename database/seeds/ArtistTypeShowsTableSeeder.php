<?php

use Illuminate\Database\Seeder;
use App\Artist;
use App\Type;
use App\ArtistType;
use App\Show;

class ArtistTypeShowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        //Empty the table first
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('artist_type_shows')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        //Define data
        $artistTypeShows = [
            [
                'artist_firstname'=>'Daniel',
                'artist_lastname'=>'Marcelin',
                'type'=>'auteur',
                'show_slug'=>'ayiti',
            ],
            [
                'artist_firstname'=>'Philippe',
                'artist_lastname'=>'Laurent',
                'type'=>'auteur',
                'show_slug'=>'ayiti',
            ],
            [
                'artist_firstname'=>'Daniel',
                'artist_lastname'=>'Marcelin',
                'type'=>'scénographe',
                'show_slug'=>'ayiti',
            ],
            [
                'artist_firstname'=>'Philippe',
                'artist_lastname'=>'Laurent',
                'type'=>'scénographe',
                'show_slug'=>'ayiti',
            ],
            [
                'artist_firstname'=>'Daniel',
                'artist_lastname'=>'Marcelin',
                'type'=>'comédien',
                'show_slug'=>'ayiti',
            ],
            [
                'artist_firstname'=>'Marius',
                'artist_lastname'=>'Von Mayenburg',
                'type'=>'auteur',
                'show_slug'=>'cible-mouvante',
            ],
            [
                'artist_firstname'=>'Olivier',
                'artist_lastname'=>'Boudon',
                'type'=>'scénographe',
                'show_slug'=>'cible-mouvante',
            ],
            [
                'artist_firstname'=>'Anne Marie',
                'artist_lastname'=>'Loop',
                'type'=>'comédien',
                'show_slug'=>'cible-mouvante',
            ],
            [
                'artist_firstname'=>'Pietro',
                'artist_lastname'=>'Varasso',
                'type'=>'comédien',
                'show_slug'=>'cible-mouvante',
            ],
            [
                'artist_firstname'=>'Laurent',
                'artist_lastname'=>'Caron',
                'type'=>'comédien',
                'show_slug'=>'cible-mouvante',
            ],
            [
                'artist_firstname'=>'Élena',
                'artist_lastname'=>'Perez',
                'type'=>'comédien',
                'show_slug'=>'cible-mouvante',
            ],
            [
                'artist_firstname'=>'Guillaume',
                'artist_lastname'=>'Alexandre',
                'type'=>'comédien',
                'show_slug'=>'cible-mouvante',
            ],
            [
                'artist_firstname'=>'Claude',
                'artist_lastname'=>'Semal',
                'type'=>'auteur',
                'show_slug'=>'ceci-nest-pas-un-chanteur-belge',
            ],
            [
                'artist_firstname'=>'Laurence',
                'artist_lastname'=>'Warin',
                'type'=>'scénographe',
                'show_slug'=>'ceci-nest-pas-un-chanteur-belge',
            ],
            [
                'artist_firstname'=>'Claude',
                'artist_lastname'=>'Semal',
                'type'=>'comédien',
                'show_slug'=>'ceci-nest-pas-un-chanteur-belge',
            ],
            [
                'artist_firstname'=>'Pierre',
                'artist_lastname'=>'Wayburn',
                'type'=>'auteur',
                'show_slug'=>'manneke',
            ],
            [
                'artist_firstname'=>'Gwendoline',
                'artist_lastname'=>'Gauthier',
                'type'=>'auteur',
                'show_slug'=>'manneke',
            ],
            [
                'artist_firstname'=>'Philippe',
                'artist_lastname'=>'Laurent',
                'type'=>'scénographe',
                'show_slug'=>'manneke',
            ],
            [
                'artist_firstname'=>'Pierre',
                'artist_lastname'=>'Wayburn',
                'type'=>'comédien',
                'show_slug'=>'manneke',
            ],
            [
                'artist_firstname'=>'Gwendoline',
                'artist_lastname'=>'Gauthier',
                'type'=>'comédien',
                'show_slug'=>'manneke',
            ],
        ];

        //Insert data in the table
        foreach ($artistTypeShows as $data) {
            $artist = Artist::where([
                ['firstname','=',$data['artist_firstname'] ],
                ['lastname','=',$data['artist_lastname'] ]
            ])->first();
            $type = Type::firstWhere('type',$data['type']);
            $artistType = ArtistType::where([
                ['artist_id','=',$artist->id ],
                ['type_id','=',$type->id ]
            ])->first();

            $show = Show::firstWhere('slug',$data['show_slug']);

            DB::table('artist_type_shows')->insert([
                'artist_type_id' => $artistType->id,
                'show_id' => $show->id,
            ]);
        }
    }


    /*
    public function run()
    {
        // Define Data
        $artistTypeShows = [
            [
                'artist_type_id' => 1,
                'slug' => Str::slug('Ayiti'),
            ],
            [
                'artist_type_id' => 2,
                'slug' => Str::slug('Ceci n\'est pas un chanteur belge'),
            ],
            [
                'artist_type_id' => 4,
                'slug' => Str::slug('Cible mouvante'),
            ],
            [
                'artist_type_id' => 6,
                'slug' => Str::slug('Ayiti'),
            ],
            [
                'artist_type_id' => 5,
                'slug' => Str::slug('Ayiti'),
            ],
            [
                'artist_type_id' => 9,
                'slug' => Str::slug('Cible mouvante'),
            ],
            [
                'artist_type_id' => 10,
                'slug' => Str::slug('Ceci n\'est pas un chanteur belge'),
            ],
            [
                'artist_type_id' => 12,
                'slug' => Str::slug('Ayiti'),
            ],
            [
                'artist_type_id' => 13,
                'slug' => Str::slug('Ceci n\'est pas un chanteur belge'),
            ],
            [
                'artist_type_id' => 15,
                'slug' => Str::slug('Nouveau spectacle de Pierre Wayburn'),
            ],
            [
                'artist_type_id' => 19,
                'slug' => Str::slug('Nouveau spectacle de Pierre Wayburn'),
            ],
            [
                'artist_type_id' => 20,
                'slug' => Str::slug('Cible mouvante'),
            ],
        ];
        
        // Insert Data
        foreach ($artistTypeShows as $data){
            $artistType = ArtistType::firstWhere('id', $data['artist_type_id']); 
            $show = Show::firstWhere('slug', $data['slug']);
            
            DB::table('artist_type_shows')->insert([
               'artist_type_id' => $artistType->id,
               'show_id' => $show->id,
            ]);
        }
    }
    */
}
