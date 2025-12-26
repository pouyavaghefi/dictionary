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
        Schema::create('loanwords', function (Blueprint $table) {
            $table->id();
            $table->string('word', 255); // e.g. "Fingerspitzengefühl"
            $table->text('meaning')->nullable(); // e.g. "intuitive flair or instinct"
            $table->foreignId('origin_language_id')->constrained('languages')->onDelete('cascade'); // e.g. German
            $table->foreignId('borrowed_language_id')->constrained('languages')->onDelete('cascade'); // e.g. English
            $table->timestamps();

            $table->unique(['word', 'origin_language_id', 'borrowed_language_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loanwords');
    }
};
