<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhraseReplacementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('phrases')->insert([
            [
                'original' => 'no longer interested in preserving traditions',
                'replacement' => 'no longer interested in upholding traditions',
                'reason' => 'Upholding better fits the idea of maintaining cultural practices.'
            ],
            [
                'original' => 'festivals which are dominated',
                'replacement' => 'festivals are increasingly dominated',
                'reason' => 'Increasingly dominated adds a sense of gradual change.'
            ],
            [
                'original' => 'associated and rooted with',
                'replacement' => 'rooted in',
                'reason' => 'Rooted in is the correct collocation.'
            ],
            [
                'original' => 'which were passed down',
                'replacement' => 'passed down through generations',
                'reason' => 'Clarifies that traditions have been transmitted over time.'
            ],
            [
                'original' => 'as the new year festivities has become',
                'replacement' => 'as New Year festivities have become',
                'reason' => 'Improves subject-verb agreement.'
            ],
            [
                'original' => 'people and specially youth',
                'replacement' => 'people—especially the youth—',
                'reason' => 'Especially is the correct word in this context.'
            ],
            [
                'original' => 'historical evidence',
                'replacement' => 'historical records',
                'reason' => 'Historical records better suits the context of written/documented history.'
            ],
            [
                'original' => 'mediums and social networks',
                'replacement' => 'modern media and social networks',
                'reason' => 'Media is the correct term for communication platforms.'
            ],
            [
                'original' => 'tend to show a lifestyle that does not exist at all in the past',
                'replacement' => 'promote an artificial lifestyle disconnected from the past',
                'reason' => 'More precise and natural phrasing.'
            ],
            [
                'original' => 'Depicts',
                'replacement' => 'Illustrates',
                'reason' => 'more academic'
            ],
            [
                'original' => 'Distribution of energy consumption',
                'replacement' => 'how energy is typically consumed',
                'reason' => 'more natural'
            ],
            [
                'original' => 'Proportion of produced gas emissions',
                'replacement' => 'corresponding greenhouse gas emissions',
                'reason' => 'more precise'
            ],
            [
                'original' => 'in an average Australian household',
                'replacement' => 'in typical Australian home',
                'reason' => 'more precise'
            ],
            [
                'original' => 'think',
                'replacement' => 'believe',
                'reason' => ''
            ],
            [
                'original' => 'cars',
                'replacement' => 'automobiles',
                'reason' => ''
            ],
            [
                'original' => 'city centers',
                'replacement' => 'urban areas',
                'reason' => ''
            ],
            [
                'original' => 'increasingly access',
                'replacement' => 'increase in accessing',
                'reason' => ''
            ],
            [
                'original' => 'highly',
                'replacement' => 'quite',
                'reason' => ''
            ],
            [
                'original' => 'fairly',
                'replacement' => 'comparatively',
                'reason' => ''
            ],
            [
                'original' => 'very',
                'replacement' => 'relatively',
                'reason' => ''
            ],
            [
                'original' => 'only',
                'replacement' => 'sole',
                'reason' => ''
            ],
            [
                'original' => 'learning',
                'replacement' => 'acquiring',
                'reason' => ''
            ],
            [
                'original' => 'native language',
                'replacement' => 'native tongue',
                'reason' => ''
            ],
        ]);
    }
}
