<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParaphrazeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('paraphrazes')->insert([
            [
                'original' => 'The first chart below show how energy is used in an average Australian household. The second chart shows the greenhouse gas emissions which result from this energy use.',
                'revised' => 'The first chart illustrates the distribution of energy consumption in an average Australian household, while the second chart displays proportion of greenhouse gas emissions produced as result of this energy use.'
            ],
            [
                'original' => 'Some people claim that not enough of the waste from homes is recycled. They say that the only way to increase recycling is for governments to make it a legal requirement.',
                'revised' => 'The volume of waste stream is increasing in an unprecedented manner and recycling cannot keep up pace. Some, among others, argue that making recycling a legal demand is the key in promoting recycling. '
            ],
            [
                'original' => 'The charts below show the proportions of British students at one university in England who were able to speak other languages in addition to English, in 2000 and 2010.',
                'revised' => 'The pie charts illustrate the percentage of UK students at one tertiary in England who can speak other foreign languages in addition to English, by the years 2000 and years 2010.'
            ],
            [
                'original' => 'The charts below show the percentage of water used for different purposes in six areas of the world. ',
                'revised' => 'The pie charts illustrate how water is used for various purposes in six regions of the world, measured in percentages.'
            ],
        ]);
    }
}
