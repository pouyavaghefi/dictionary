<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguagePracticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('language_practice')->insert([
            [
                'question_text' => 'physical activity',
                'answer_text' => 'regular workouts',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'proportion',
                'answer_text' => 'percentage',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'regular',
                'answer_text' => 'consistent',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'participated',
                'answer_text' => 'took part in',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'increase',
                'answer_text' => 'surge',  // more advanced than "rise"
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'decrease',
                'answer_text' => 'decline', // more formal than "fall"
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'majority',
                'answer_text' => 'the majority of', // more precise than "most of"
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'approximately',
                'answer_text' => 'roughly', // good formal alternative to "almost"
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'significant',
                'answer_text' => 'substantial', // high-level synonym for "considerable"
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'in the end',
                'answer_text' => 'eventually',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'slightly',
                'answer_text' => 'marginally',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'vital',
                'answer_text' => 'crucial',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'problems',
                'answer_text' => 'challenges',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'adaptability',
                'answer_text' => 'accountability',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'analysis',
                'answer_text' => 'interpretation',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'accommodation',
                'answer_text' => 'residence',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'reported',
                'answer_text' => 'made up',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'followed by',
                'answer_text' => 'subsequently',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'since',
                'answer_text' => 'onwards',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'homeownerships',
                'answer_text' => 'owner-occupied households',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'constant',
                'answer_text' => 'steady',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'group',
                'answer_text' => 'sample',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'major field',
                'answer_text' => 'major discipline',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'particular',
                'answer_text' => 'specific',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'in the end',
                'answer_text' => 'by the end',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'favored',
                'answer_text' => 'opted',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'till',
                'answer_text' => 'up to',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'surpassed',
                'answer_text' => 'outnumbered',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'afterwards',
                'answer_text' => 'subsequently',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_text' => 'more',
                'answer_text' => 'greater',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
