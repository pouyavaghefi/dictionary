<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbbreviationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abbreviations')->insert([
            [
                'abbreviation' => 'FOMO',
                'meaning' => 'Fear Of Missing Out',
                'language_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'abbreviation' => 'YOLO',
                'meaning' => 'You Only Live Once',
                'language_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'abbreviation' => 'LOL',
                'meaning' => 'Laugh Out Loud',
                'language_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'abbreviation' => 'BRB',
                'meaning' => 'Be Right Back',
                'language_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'abbreviation' => 'IMO',
                'meaning' => 'In My Opinion',
                'language_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'abbreviation' => 'IDK',
                'meaning' => 'I Don’t Know',
                'language_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'abbreviation' => 'SMH',
                'meaning' => 'Shaking My Head',
                'language_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'abbreviation' => 'TBA',
                'meaning' => 'To Be Announced',
                'language_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'abbreviation' => 'FAQ',
                'meaning' => 'Frequently Asked Questions',
                'language_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'abbreviation' => 'BCE',
                'meaning' => 'Before Common Era',
                'language_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'abbreviation' => 'BC',
                'meaning' => 'Before Christ',
                'language_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'abbreviation' => 'CE',
                'meaning' => 'Common Era',
                'language_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'abbreviation' => 'AD',
                'meaning' => 'Anno Domini',
                'language_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'abbreviation' => 'FOV',
                'meaning' => 'Field-of-View',
                'language_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
