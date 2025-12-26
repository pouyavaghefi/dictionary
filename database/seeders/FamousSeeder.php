<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FamousSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('catch_phrases')->insert([
            [
                'phrase' => 'some, among the others',
                'meaning' => 'indicating that a group is being referenced'
            ]
        ]);
    }
}
