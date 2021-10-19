<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            'id' => 1,
            'language' => '英語',
            ]);
        
        DB::table('languages')->insert([
            'id' => 2,
            'language' => '中国語',
            ]);
            
        DB::table('languages')->insert([
            'id' => 3,
            'language' => '韓国語',
            ]);
            
    }
}
