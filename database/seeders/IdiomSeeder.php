<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdiomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('idioms')->insert([
            ['idiom' => 'all in all', 'example' => null, 'meaning' => null],
            ['idiom' => 'Break the ice', 'example' => 'I told a joke to break the ice at the beginning of my presentation.', 'meaning' => null],
            ['idiom' => 'Hit the books', 'example' => 'I need to hit the books if I want to pass the exam', 'meaning' => null],
            ['idiom' => 'A piece of cake', 'example' => 'The first part of the test was a piece of cake, but the second part was challenging.', 'meaning' => null],
            ['idiom' => 'Burn the midnight oil', 'example' => 'I had to burn the midnight oil to finish my assignment on time', 'meaning' => null],
            ['idiom' => 'On the same page', 'example' => 'Before starting the project, we made sure everyone was on the same page', 'meaning' => 'To agree or have the same understanding'],
            ['idiom' => 'The ball is in your court', 'example' => 'I’ve given you all the information—now the ball is in your court.', 'meaning' => null],
            ['idiom' => 'Sit on the fence', 'example' => 'He’s still sitting on the fence about whether to study abroad or not', 'meaning' => 'To avoid making a decision.'],
            ['idiom' => 'Go the extra mile', 'example' => 'She always goes the extra mile to help her classmates', 'meaning' => null],
            ['idiom' => 'Once in a blue moon', 'example' => 'I only eat fast food once in a blue moon because it’s unhealthy', 'meaning' => 'very rarely'],
            ['idiom' => 'Under the weather', 'example' => 'I couldn’t attend the meeting because I was under the weather.', 'meaning' => 'Feeling sick or unwell.'],
            ['idiom' => 'Im glad we got on the same page', 'example' => 'Im glad too', 'meaning' => 'Im glad'],
            ['idiom' => 'that kind of a given', 'example' => null, 'meaning' => 'some detail or fact that is known to be true'],
            ['idiom' => 'more often than not', 'example' => null, 'meaning' => 'usually'],
            ['idiom' => 'don’t give up the day job', 'example' => 'I watched your performance at the theater today. My advice is don’t give up your day job.', 'meaning' => null],
        ]);

    }
}
