<?php

use Illuminate\Database\Seeder;
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
}
