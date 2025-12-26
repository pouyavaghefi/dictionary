<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class SentenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sentences')->insert([
            ['language_id' => 1, 'sentences' => 'I contain multitudes'],
            ['language_id' => 1, 'sentences' => 'they will outlive us'],
            ['language_id' => 1, 'sentences' => 'invisible to the naked eyes, they are ubiquitous'],
            ['language_id' => 1, 'sentences' => 'from seaweed and coral to dogs and humans'],
            ['language_id' => 1, 'sentences' => 'utterly absorbing and hugely important book'],
            ['language_id' => 1, 'sentences' => 'we mess with them at our peril'],
            ['language_id' => 1, 'sentences' => 'vary not only between species but also between individuals and within different parts of each individual'],
            ['language_id' => 1, 'sentences' => 'we are continually swapping microbes with other humans'],
            ['language_id' => 1, 'sentences' => 'we have a symbiotic relationship, that can be mutually beneficial or mutually destructive'],
            ['language_id' => 1, 'sentences' => 'bacteria aid digestion, regulate our immune systems, eliminate toxins, produce vitamins, affect our behaviour and even combat obesity'],
            ['language_id' => 1, 'sentences' => 'The most recent research actually turns accepted norms upside down'],
            ['language_id' => 1, 'sentences' => 'The readers of Yong’s book must be prepared for a decidedly unglamorous world'],
            ['language_id' => 1, 'sentences' => 'The microbial world is a place of wonder'],
            ['language_id' => 1, 'sentences' => 'babies get the best start in life'],
            ['language_id' => 1, 'sentences' => 'wet my beak'],
            ['language_id' => 1, 'sentences' => 'hung out of his reach my beak'],
            ['language_id' => 1, 'sentences' => 'progress in this field has quickly gathered pace'],
            ['language_id' => 1, 'sentences' => 'and it is the primary cause in the vast majority'],
            ['language_id' => 1, 'sentences' => 'mobility demand can be met by far fewer vehicles'],
            ['language_id' => 1, 'sentences' => 'vehicles’ average annual mileage double as a result'],
            ['language_id' => 1, 'sentences' => 'There are a number of hurdles to overcome'],
            ['language_id' => 1, 'sentences' => 'My unshakeable faith in the goodness of mankind'],
            ['language_id' => 1, 'sentences' => 'There is as much reason for excitement as caution'],
            ['language_id' => 1, 'sentences' => 'Have thickened my skin'],
            ['language_id' => 1, 'sentences' => 'Let’s call a spade a spade'],
            ['language_id' => 1, 'sentences' => 'That’s the way the cookie crumbles'],
            ['language_id' => 1, 'sentences' => 'And I sure as hell don’t follow the herd'],
            ['language_id' => 1, 'sentences' => 'Looking to turn over a new leaf'],
            ['language_id' => 1, 'sentences' => 'no more than any other industry and less than most'],
            ['language_id' => 1, 'sentences' => 'children who spend excessive time on smartphones must endeavor to regain focus'],
            ['language_id' => 1, 'sentences' => 'you must demonstrate your moral timbre as a human being'],
            ['language_id' => 1, 'sentences' => 'That goes to show how much determination he had towards his dreams'],
            ['language_id' => 1, 'sentences' => 'That goes to show how much determination he had towards his dreams'],
            ['language_id' => 1, 'sentences' => 'Absolute stillness greeted our gaze'],
        ]);
    }
}
