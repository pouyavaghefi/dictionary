<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class TurnoverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('turnovers')->insert([
            ['language_id' => 1, 'sentences' => 'From Monday, I have lessons again'],
            ['language_id' => 1, 'sentences' => 'of course'],
            ['language_id' => 1, 'sentences' => 'youre welcome'],
            ['language_id' => 1, 'sentences' => 'I have to wake up early tomorrow, but Im not in the mood'],
            ['language_id' => 1, 'sentences' => 'All the best'],
            ['language_id' => 1, 'sentences' => 'Where is the address written'],
            ['language_id' => 1, 'sentences' => 'One should respect the elders'],
            ['language_id' => 1, 'sentences' => 'Attention! A bird!'],
            ['language_id' => 1, 'sentences' => 'There is no sender written on the parcel'],
            ['language_id' => 1, 'sentences' => 'He has found work in Germany'],
            ['language_id' => 1, 'sentences' => 'What kind of cell phone do you have'],
            ['language_id' => 1, 'sentences' => 'What kind of books do you like to read'],
            ['language_id' => 1, 'sentences' => 'Was fur ein Auto fahrst du?'],
            ['language_id' => 1, 'sentences' => 'Why do you learn german?'],
            ['language_id' => 1, 'sentences' => 'Why is the sky blue?'],
            ['language_id' => 1, 'sentences' => 'Why do you get hiccups?'],
            ['language_id' => 1, 'sentences' => 'How often do you learn german?'],
            ['language_id' => 1, 'sentences' => 'How often should you wash your hair'],
            ['language_id' => 1, 'sentences' => 'How often do you go to the movies?'],
            ['language_id' => 1, 'sentences' => 'How much is a coke?'],
            ['language_id' => 1, 'sentences' => 'How much money do you need?'],
            ['language_id' => 1, 'sentences' => 'How much water do you drink per day?'],
            ['language_id' => 1, 'sentences' => 'How many citizens has germany'],
            ['language_id' => 1, 'sentences' => 'How many teeht do humans haveHow many hours has a year'],
            ['language_id' => 1, 'sentences' => 'Which day is today?'],
            ['language_id' => 1, 'sentences' => 'Which cup should i wear today?'],
            ['language_id' => 1, 'sentences' => 'the stumbling block was higher authority '],
            ['language_id' => 1, 'sentences' => 'Which picture do you like'],
            ['language_id' => 1, 'sentences' => 'I sought approval'],
        ]);
    }
}
