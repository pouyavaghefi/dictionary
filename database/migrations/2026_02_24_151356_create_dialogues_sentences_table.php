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
        Schema::create('dialogues_sentences', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order')->nullable(); // or any column name you need
            $table->foreignId('dialogue_id')->constrained('dialogues')->onDelete('cascade');
            $table->string('sentence_full');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dialogues_sentences');
    }
};
