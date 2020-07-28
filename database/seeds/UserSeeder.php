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
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@gmail.com'),
        ]);
        DB::table('users')->insert([
            'name' => 'writer',
            'email' => 'writer@gmail.com',
            'password' => Hash::make('admin@gmail.com'),
        ]);
        DB::table('users')->insert([
            'name' => 'publisher',
            'email' => 'publisher@gmail.com',
            'password' => Hash::make('admin@gmail.com'),
        ]);
        DB::table('users')->insert([
            'name' => 'editor',
            'email' => 'editor@gmail.com',
            'password' => Hash::make('admin@gmail.com'),
        ]);
    }
}
