<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('abbreviations', function (Blueprint $table) {
            $table->id();
            $table->string('abbreviation', 50); // e.g. "NASA"
            $table->string('meaning', 255);     // e.g. "National Aeronautics and Space Administration"
            $table->foreignId('language_id')->constrained('languages')->onDelete('cascade'); // optional, if multilingual
            $table->timestamps();

            $table->unique(['abbreviation', 'language_id']); // prevent duplicates within a language
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abbreviations');
    }
};
