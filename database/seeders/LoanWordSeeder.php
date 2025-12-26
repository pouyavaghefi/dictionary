<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class LoanWordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loanwords')->insert([
            [
                'word' => 'Fingerspitzengefühl',
                'meaning' => 'Intuitive flair or instinct, especially in delicate situations.',
                'origin_language_id' => 2, // assuming 2 = German
                'borrowed_language_id' => 1, // assuming 1 = English
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'word' => 'Schadenfreude',
                'meaning' => 'Pleasure derived from another person’s misfortune.',
                'origin_language_id' => 2,
                'borrowed_language_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'word' => 'Wanderlust',
                'meaning' => 'A strong desire to travel and explore the world.',
                'origin_language_id' => 2,
                'borrowed_language_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'word' => 'Kindergarten',
                'meaning' => 'A school or class for young children, typically before first grade.',
                'origin_language_id' => 2,
                'borrowed_language_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'word' => 'Doppelgänger',
                'meaning' => 'A person who closely resembles another person; a double.',
                'origin_language_id' => 2,
                'borrowed_language_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'word' => 'Zeitgeist',
                'meaning' => 'The defining spirit or mood of a particular period of history.',
                'origin_language_id' => 2,
                'borrowed_language_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'word' => 'Weltschmerz',
                'meaning' => 'A feeling of melancholy and world-weariness.',
                'origin_language_id' => 2,
                'borrowed_language_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
