<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'login' => 'jerre',
            'firstname' => 'jeremy',
            'lastname' => 'loubi',
            'email' => 'jeremy@hotmail.fr',
            'password' => Hash::make('jeremy'),
            'langue' => 'nl',
        ]);

        DB::table('users')->insert([
            'login' => 'michaelsan',
            'firstname' => 'michael',
            'lastname' => 'francis',
            'email' => 'michael@hotmail.fr',
            'password' => Hash::make('michael'),
            'langue' => 'fr',
        ]);

        DB::table('users')->insert([
            'login' => 'silvir',
            'firstname' => 'silvie',
            'lastname' => 'vandervaart',
            'email' => 'silvie@hotmail.fr',
            'password' => Hash::make('silvie'),
            'langue' => 'fr',
        ]);
    }
}
