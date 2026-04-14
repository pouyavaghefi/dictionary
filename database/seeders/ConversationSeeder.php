<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConversationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
        {
            // Seed Conversation Categories
            DB::table('conversation_categories')->insert([
                ['name' => 'Housing']
        ]);

        // Seed Dialogues
        DB::table('dialogues')->insert([
            ['title' => 'Housing: Research Thoroughly', 'conversation_category_id' => 1, 'dialogue' => 'Housing: Research thoroughly! Student accommodation is competitive. Consider shared housing (rooms in houses) – significantly cheaper than apartments. Explore websites like Kamernet, Pararius, and Funda for rentals.']
        ]);

        // Seed Words & Dialogues (Linking the word to the dialogue)
        DB::table('words_dialogues')->insert([
            ['word_id' => 1, 'dialogue_id' => 1]
        ]);
    }
}
