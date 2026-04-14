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
                'term_meaning_fa' => 'قوس شخصیتی',
                'related_terms' => json_encode(['plot development', 'storyline', 'character development']),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'term_name' => 'day job',
                'term_explanation' => 'A person’s regular job and main source of income, typically as contrasted with a more enjoyable occupation or hobby.',
                'term_meaning_fa' => 'شغل روزانه',
                'related_terms' => json_encode(['main job', 'career', 'occupation']),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'term_name' => 'marinara sauce',
                'term_explanation' => 'Marinara sauce is a tomato sauce usually made with tomatoes, garlic, herbs, and onions. Variations include capers, olives, spices, and a dash of wine.',
                'term_meaning_fa' => null,
                'related_terms' => json_encode(['tomato sauce', 'pasta sauce', 'Italian cuisine']),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'term_name' => 'clam party',
                'term_explanation' => 'A picnic or social gathering at the seashore at which clams and other seafood are baked, sometimes with corn and other items, traditionally on hot stones under a covering of seaweed. Informal: any social gathering, especially a very noisy one.',
                'term_meaning_fa' => 'خسیس',
                'related_terms' => json_encode(['seafood party', 'beach picnic', 'gathering']),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'term_name' => 'high-ROI',
                'term_explanation' => 'A high return on investment (ROI) indicates that an investment’s gains compare favorably to its cost, meaning it is generating significant profit relative to the amount invested.',
                'term_meaning_fa' => null,
                'related_terms' => json_encode(['investment', 'profit', 'ROI']),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'term_name' => 'go commercial',
                'term_explanation' => 'Describing something with money-making and marketing intentions.',
                'term_meaning_fa' => null,
                'related_terms' => json_encode(['monetization', 'marketing', 'business']),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'term_name' => 'wrap party',
                'term_explanation' => 'A party held to celebrate when the shooting of a film has been completed.',
                'term_meaning_fa' => null,
                'related_terms' => json_encode(['film party', 'celebration', 'shooting complete']),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
