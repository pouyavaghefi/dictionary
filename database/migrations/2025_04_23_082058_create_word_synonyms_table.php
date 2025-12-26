<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('word_synonyms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('word_id')->constrained('words')->onDelete('cascade');
            $table->foreignId('synonym_id')->constrained('words')->onDelete('cascade');
            $table->timestamps();

            $table->unique(['word_id', 'synonym_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('word_synonyms');
    }
};
