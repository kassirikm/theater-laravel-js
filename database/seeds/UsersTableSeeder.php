<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        // Default admin
        if (User::count() == 0) {
            $role = Role::where('name', 'admin')->firstOrFail();

            User::create([
                'login'          => 'Admin',
                'firstname'      => 'Admin',
                'lastname'       => 'Adminovitch',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => Str::random(60),
                'role_id'        => 1,
            ]);
        }
        
        //Users
        DB::table('users')->insert([
            'login' => 'jerre',
            'firstname' => 'jeremy',
            'lastname' => 'loubi',
            'email' => 'jeremy@hotmail.fr',
            'password' => Hash::make('jeremy'),
            'remember_token' => Str::random(60),
            'langue' => 'NL',
        ]);

        DB::table('users')->insert([
            'login' => 'michaelsan',
            'firstname' => 'michael',
            'lastname' => 'francis',
            'email' => 'michael@hotmail.fr',
            'password' => Hash::make('michael'),
            'remember_token' => Str::random(60),
            'langue' => 'FR',
        ]);

        DB::table('users')->insert([
            'login' => 'silvir',
            'firstname' => 'silvie',
            'lastname' => 'vandervaart',
            'email' => 'silvie@hotmail.fr',
            'password' => Hash::make('silvie'),
            'remember_token' => Str::random(60),
            'langue' => 'FR',
        ]);
    }
}
