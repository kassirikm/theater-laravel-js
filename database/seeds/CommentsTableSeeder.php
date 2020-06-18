<?php

use Illuminate\Database\Seeder;
use App\Show;
use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ///Empty the table first
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Location::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        //Define data
        $Comments = [
            [
                'content'=>'Mon super commentaire',
                'show_title'=>'Ayiti',
            ],
            [
                'content'=>'Mon super commentaire',
                'show_title'=>'Ayiti',
            ],
            [
                'content'=>'Mon super commentaire',
                'show_title'=>'Manneke… !',
            ],
            [
                'content'=>'Mon super commentaire',
                'show_title'=>'Ayiti',
            ],
        ];

        //Insert data in the table
        foreach ($comments as $data) {
            $show = Locality::firstWhere('title',$data['show_title']);

            DB::table('comments')->insert([
                'content' => $data['content'],
                'show_id' => $show->id,	//Référence à la table
            ]);
    }
}
