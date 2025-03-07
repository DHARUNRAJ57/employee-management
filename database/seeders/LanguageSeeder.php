<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LanguageSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() 
    {
        DB::table('languages')->insert([
            'language' => 'English',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('languages')->insert([
            'language' => 'French',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('languages')->insert([
            'language' => 'Tamil',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('languages')->insert([
            'language' => 'Hindi',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

}
