<?php

use Illuminate\Database\Seeder;

class WordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('words')->insert([
                'id' => 1,
                'content' => '谢谢',
                'Japanese' => 'ありがとう',
                'language_id' => 1,
                'book_id' => 1,
                'user_id' => 1,
                ]);
            //idは必ず存在する番号を入れればOK
            
            DB::table('words')->insert([
                'id' => 2,
                'content' => '什么',
                'Japanese' => '何',
                'language_id' => 1,
                'book_id' => 1,
                'user_id' => 1,
                ]);
                
            DB::table('words')->insert([
                'id' => 3,
                'content' => '미안',
                'Japanese' => 'ごめんね',
                'language_id' => 1,
                'book_id' => 1,
                'user_id' => 1,
                ]);
            
            DB::table('words')->insert([
                'id' => 4,
                'content' => 'superpower',
                'Japanese' => '超大国',
                'language_id' => 1,
                'book_id' => 4,
                'user_id' => 1,
                ]);
    }
}
