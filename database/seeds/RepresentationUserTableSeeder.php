<?php

use Illuminate\Database\Seeder;
use App\Representation;
use App\User;

class RepresentationUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define data        
        $representationUsers = [
            [
                'when'=>'2012-10-12 13:30',
                'login' => 'jerre',
                'places' => 100,
            ],
            [
                'when'=>'2012-10-12 20:30',
                'login' => 'jerre',
                'places' => 100,
            ],
            [
                'when'=>'2012-10-12 13:30',
                'login' => 'silvir',
                'places' => 100,
            ],
            [
                'when'=>'2012-10-02 20:30',
                'login' => 'michaelsan',
                'places' => 100,
            ],
            [
                'when'=>'2012-10-16 20:30',
                'login' => 'silvir',
                'places' => 100,
            ],
        ];
        
        // Insert Data
        foreach($representationUsers as $data){
            $representation = Representation::firstWhere('when', $data['when']);
            $user = User::firstWhere('login', $data['login']);
            /*$places=Representation::firstWhere('places' , $data['places']);
        
            while($places > 0){
                if('show_id' == $data['show_id'])
                {
                $places = $places-1;
                }
            }*/
            
            DB::table('representation_users')->insert([
                'representation_id' => $representation->id,
                'user_id' => $user->id,
                'places' => $data['places'],
            ]);
        }
    }
}
