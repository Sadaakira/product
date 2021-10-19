<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'id' => 1,
            'title' => '拾遗录',
            'author' => '夏达·',
            ]);
            
         DB::table('books')->insert([
            'id' => 2,
            'title' => '罗小黑战记',
            'author' => 'MTJJ',
            ]);
            
         DB::table('books')->insert([
            'id' => 3,
            'title' => 'Cheese in the Trap',
            'author' => 'soonkki',
            ]);
            
         DB::table('books')->insert([
            'id' => 4,
            'title' => '长歌行',
            'author' => '夏达',
            ]);
    }
}
