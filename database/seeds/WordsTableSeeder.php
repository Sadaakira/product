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
                'content' => '謝謝',
                'Japanese' => 'ありがとう',
                'page' => 67,
            ]);
            //idは必ず存在する番号を入れればOK
    }
}
