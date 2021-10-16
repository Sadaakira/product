<?php

use Illuminate\Database\Seeder;
//use database\seeds;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => Str::random(10),
            'email' => 'vocab0123@gmail.com',
            'password' => Hash::make('password'),
        ]);
            
    }
}
