<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
        'user_id',
        'language_id',
        'total_words',
        'correct_answers',
        'is_completed'
    ];

    public function words()
    {
        return $this->belongsToMany(Word::class)
            ->withPivot(['is_correct', 'user_sentence'])
            ->withTimestamps();
    }
}
