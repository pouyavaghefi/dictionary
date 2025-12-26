<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhraseMngSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('phrase_mng')->insert([
            [
                'phrase' => '... more than the other categories',
                'answer' => 'considerably',
                'what_for' => 'comparing',
                'hint' => 'one word',
            ],
            [
                'phrase' => '... agriculture and domestic use',
                'answer' => 'followed by',
                'what_for' => 'coming afterwards',
                'hint' => 'two words'
            ],
            [
                'phrase' => 'Interestingly, all the other countries have identical profiles, ... water consumption,',
                'answer' => 'in terms of',
                'what_for' => 'because',
                'hint' => 'three words'
            ],
            [
                'phrase' => 'with agriculture being ... use at etc',
                'answer' => 'the majority',
                'what_for' => 'the most',
                'hint' => 'two words'
            ],
            [
                'phrase' => '... in this group, is South America',
                'answer' => 'outlier',
                'what_for' => 'except',
                'hint' => 'one word'
            ],
            [
                'phrase' => 'Interestingly, all the other countries have identical profiles, ... water consumption.',
                'answer' => 'in terms of',
                'what_for' => 'because',
                'hint' => 'three words'
            ],
            [
                'phrase' => 'but with over ... the domestic use',
                'answer' => 'double',
                'what_for' => 'double',
                'hint' => 'one word'
            ],
            [
                'phrase' => 'but with over ... the domestic use',
                'answer' => 'double',
                'what_for' => 'double',
                'hint' => 'one word'
            ],
            [
                'phrase' => 'It is essential for children to ... the distinction between right and wrong during their formative years',
                'answer' => 'comprehend',
                'what_for' => 'differentiate',
                'hint' => 'one word'
            ],
            [
                'phrase' => 'However, I am ... against the notion that punishment is an effective way to instil these crucial moral guidelines.',
                'answer' => 'wholeheartedly',
                'what_for' => 'deeply',
                'hint' => 'one word'
            ],
            [
                'phrase' => 'It is ... believed that teaching children the difference between right and wrong should begin at an early age',
                'answer' => 'widely',
                'what_for' => 'comprehensively',
                'hint' => 'one word'
            ],
            [
                'phrase' => 'However, I am ... against the notion that punishment is an effective way to instil these crucial moral guidelines.',
                'answer' => 'wholeheartedly',
                'what_for' => 'deeply',
                'hint' => 'one word'
            ],
            [
                'phrase' => 'However, I am ... against the notion that punishment is an effective way to instil these crucial moral guidelines.',
                'answer' => 'wholeheartedly',
                'what_for' => 'deeply',
                'hint' => 'one word'
            ],
            [
                'phrase' => 'However, I am ... against the notion that punishment is an effective way to instil these crucial moral guidelines.',
                'answer' => 'wholeheartedly',
                'what_for' => 'deeply',
                'hint' => 'one word'
            ],
            [
                'phrase' => 'punishment plays a ... in this learning process',
                'answer' => 'crucial role',
                'what_for' => 'major role',
                'hint' => 'two words'
            ],
            [
                'phrase' => 'punishment plays a ... in this learning process',
                'answer' => 'crucial role',
                'what_for' => 'major role',
                'hint' => 'two words'
            ],
            [
                'phrase' => 'instilling these crucial moral guidelines, without ... to punishment,',
                'answer' => 'resorting',
                'what_for' => 'taking',
                'hint' => 'one word'
            ],
            [
                'phrase' => 'can foster better long-term behavior and emotional ... in children.',
                'answer' => 'well-being',
                'what_for' => 'being well',
                'hint' => 'two words'
            ],
            [
                'phrase' => 'Nevertheless, I strongly disagree with the idea that punishment is a necessary nor effective tool in helping children ... these moral concepts.',
                'answer' => 'grasp',
                'what_for' => 'achieving',
                'hint' => 'one word'
            ],
            [
                'phrase' => 'However, refrigeration contributes ... to emissions at 14%, compared to just 3% from cooling and 8% from lighting.',
                'answer' => 'disproportionately',
                'what_for' => 'very little',
                'hint' => 'one word'
            ],
        ]);
    }
}
