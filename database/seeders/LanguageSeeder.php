<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('languages')->insert([
            ['name' => 'English', 'code' => 'en'],
            ['name' => 'German', 'code' => 'de'],
            ['name' => 'Farsi', 'code' => 'fa'],
        ]);
    }
}
