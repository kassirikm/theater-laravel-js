<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {        
       
        //Define data
       $types = [
            ['type'=>'comédien'],
            ['type'=>'scénographe'],
            ['type'=>'auteur'],
        ];
        
        //Insert data in the table
        foreach ($types as $data) {     
            DB::table('types')->insert([
                'type' => $data['type'],
            ]);
        }
    }

}
