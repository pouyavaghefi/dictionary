<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
          $this->call(LanguageSeeder::class);
          $this->call(WordSeeder::class);
          $this->call(SentenceSeeder::class);
          $this->call(TurnoverSeeder::class);
          $this->call(AbbreviationSeeder::class);
          $this->call(LoanWordSeeder::class);
          $this->call(PhraseReplacementSeeder::class);
          $this->call(ParaphrazeSeeder::class);
          $this->call(PhraseMngSeeder::class);
          $this->call(FamousSeeder::class);
          $this->call(IdiomSeeder::class);
          $this->call(LanguagePracticeSeeder::class);
//          $this->call(TermSeeder::class);
    }
}
