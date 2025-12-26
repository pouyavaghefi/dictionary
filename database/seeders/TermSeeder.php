<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('terms')->insert([
            [
                'term_name' => 'character arcs',
                'term_explanation' => 'A character arc is the transformation or inner journey of a character over the course of a story. If a story has a character arc, the character begins as one sort of person and gradually transforms into a different sort of person in response to changing developments in the story.',
                'term_meaning_fa' => 'قوس شخصیتی'
            ],
            [
                'term_name' => 'day job',
                'term_explanation' => 'A person’s regular job and main source of income, typically as contrasted with a more enjoyable occupation or hobby.',
                'term_meaning_fa' => 'قوس شخصیتی'
            ],
            [
                'term_name' => 'marinara sauce',
                'term_explanation' => 'Marinara sauce is a tomato sauce usually made with tomatoes, garlic, herbs, and onions. Variations include capers, olives, spices, and a dash of wine.'
            ],
            [
                'term_name' => 'clam party',
                'term_explanation' => 'a picnic or social gathering at the seashore at which clams clam and other seafood are baked, sometimes with corn and other items, traditionally on hot stones under a covering of seaweed. Informal., any social gathering, especially a very noisy one.',
                'term_meaning_fa' => 'خسیس'
            ],
            [
                'term_name' => 'high-ROI',
                'term_explanation' => 'A high return on investment (ROI) indicates that an investments gains compare favorably to its cost, meaning it is generating significant profit relative to the amount invested',
            ],
            [
                'term_name' => 'go commerical',
                'term_explanation' => 'describing something with money-making and marketing intentions.',
            ],
            [
                'term_name' => 'wrap party',
                'term_explanation' => 'a party held to celebrate when the shooting of a film has been completed.',
            ]
        ]);
    }
}
