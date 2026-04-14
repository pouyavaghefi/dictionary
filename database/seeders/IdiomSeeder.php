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
            ['idiom' => 'all in all', 'example' => null, 'meaning' => 'Considering everything; on the whole'],
            ['idiom' => 'grown on you', 'example' => null, 'meaning' => 'start to like someone or something more and more'],
            ['idiom' => 'hit it off', 'example' => null, 'meaning' => 'be normally friendly and well-suited'],
            ['idiom' => '', 'example' => null, 'meaning' => ''],
            ['idiom' => 'at short notice', 'example' => null, 'meaning' => 'with little warning or time for preparation'],
            ['idiom' => 'complete agreement with', 'example' => null, 'meaning' => 'used to express complete agreement with something just said'],
            ['idiom' => 'run the show', 'example' => null, 'meaning' => 'dominate or be in charge of an undertaking or area of activity'],
            ['idiom' => 'bid them welcome', 'example' => null, 'meaning' => 'greet upon arrival'],
            ['idiom' => 'all walks of life', 'example' => null, 'meaning' => 'different types of jobs and different levels of society'],
            ['idiom' => 'put ones feet up', 'example' => null, 'meaning' => 'take a rest, especially when reclining with ones feet raised and supported'],
            ['idiom' => 'drones on', 'example' => null, 'meaning' => 'to speak for a long time in a dull voice without saying anything interesting'],
            ['idiom' => 'doom and gloom', 'example' => null, 'meaning' => 'a general feeling of pessimism or despondency.'],
            ['idiom' => 'cradle of humanity', 'example' => null, 'meaning' => 'refers to the region in South Africa, specifically Gauteng province'],
            ['idiom' => 'Turn Me Loose', 'example' => null, 'meaning' => 'to release, set free, or allow someone to act without restrictions or control'],
            ['idiom' => 'brief the whips', 'example' => null, 'meaning' => 'To brief someone is to bring them up to date with a summary of the latest information on something'],
            ['idiom' => 'let start with a toast', 'example' => null, 'meaning' => 'good wishes or respect for someone that involves holding up and then drinking from a glass of alcohol, especially wine, after a short speech'],
            ['idiom' => 'you are cheat', 'example' => null, 'meaning' => 'to get something by dishonesty or deception'],
            ['idiom' => 'keep your foot in the door', 'example' => null, 'meaning' => 'to make the first step toward a goal by gaining entry into an organization, a career, etc.'],
            ['idiom' => 'leech off us', 'example' => 'I dont want to leech off my parents anymore', 'meaning' => 'to get money, food, etc. from other people, especially without working for it or doing anything to deserve it'],
            ['idiom' => 'be civil', 'example' => null, 'meaning' => 'not rude; marked by satisfactory (or especially minimal) adherence to social usages and sufficient but not noteworthy consideration for others'],
            ['idiom' => 'butt it', 'example' => null, 'meaning' => 'Be killed; die'],
            ['idiom' => 'let bygones be bygones', 'example' => null, 'meaning' => 'forget past offences or causes of conflict and be reconciled.'],
            ['idiom' => 'whip it', 'example' => null, 'meaning' => 'move or hit something quickly'],
            ['idiom' => 'spare him', 'example' => null, 'meaning' => 'to refrain from hurting'],
            ['idiom' => 'rundown apartment', 'example' => null, 'meaning' => 'A dingy neighborhood thats seen better days'],
            ['idiom' => 'travel off peak', 'example' => null, 'meaning' => 'booking flights, trains, or accommodation during periods of lower demand to save money and avoid crowds'],
            ['idiom' => 'spill the secrets', 'example' => null, 'meaning' => 'to prematurely disclose confidential, private, or surprising information'],
            ['idiom' => 'Break the ice', 'example' => 'I told a joke to break the ice at the beginning of my presentation.', 'meaning' => 'To initiate social interaction or reduce tension'],
            ['idiom' => 'Hit the books', 'example' => 'I need to hit the books if I want to pass the exam', 'meaning' => 'To study hard'],
            ['idiom' => 'A piece of cake', 'example' => 'The first part of the tests was a piece of cake, but the second part was challenging.', 'meaning' => 'Something very easy to do'],
            ['idiom' => 'Burn the midnight oil', 'example' => 'I had to burn the midnight oil to finish my assignment on time', 'meaning' => 'To work or study late into the night'],
            ['idiom' => 'On the same page', 'example' => 'Before starting the project, we made sure everyone was on the same page', 'meaning' => 'To agree or have the same understanding'],
            ['idiom' => 'The ball is in your court', 'example' => 'I’ve given you all the information—now the ball is in your court.', 'meaning' => 'It is up to you to make the next decision or step'],
            ['idiom' => 'Sit on the fence', 'example' => 'He’s still sitting on the fence about whether to study abroad or not', 'meaning' => 'To avoid making a decision'],
            ['idiom' => 'Go the extra mile', 'example' => 'She always goes the extra mile to help her classmates', 'meaning' => 'To make a special effort or do more than expected'],
            ['idiom' => 'Once in a blue moon', 'example' => 'I only eat fast food once in a blue moon because it’s unhealthy', 'meaning' => 'Very rarely'],
            ['idiom' => 'Under the weather', 'example' => 'I couldn’t attend the meeting because I was under the weather.', 'meaning' => 'Feeling sick or unwell'],
            ['idiom' => 'Im glad we got on the same page', 'example' => 'Im glad too', 'meaning' => 'Expressing happiness about reaching an agreement'],
            ['idiom' => 'that kind of a given', 'example' => null, 'meaning' => 'Some detail or fact that is known to be true'],
            ['idiom' => 'more often than not', 'example' => null, 'meaning' => 'Usually'],
            ['idiom' => 'dont chicken out', 'example' => null, 'meaning' => 'To decide not to do something because of fear'],
            ['idiom' => 'break through plateau', 'example' => null, 'meaning' => 'To overcome a period of stagnation and reach a new level of performance'],
            ['idiom' => 'don’t give up the day job', 'example' => 'I watched your performance at the theater today. My advice is don’t give up your day job.', 'meaning' => 'Used to tell someone that they are not good at something (often humorously)'],
            ['idiom' => 'THE POINT IS YOU TALK THE TALK, YOU DONT WALK THE WALK', 'example' => null, 'meaning' => 'Saying that you can do something does not prove that you can actually do it; actions speak louder than words'],
        ]);
    }
}
