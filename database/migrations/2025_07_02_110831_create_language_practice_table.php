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
        Schema::create('language_practice', function (Blueprint $table) {
            $table->id();
            $table->string('question_text');      // original phrase or sentence
            $table->text('answer_text');          // paraphrased phrase or sentence
            $table->unsignedBigInteger('user_id')->nullable();  // optional: to track user if multi-user system
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('language_practice');
    }
};
