<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $table = 'words';
    protected $guarded = [];

    public function synonyms()
    {
        return $this->belongsToMany(Word::class, 'word_synonyms', 'word_id', 'synonym_id');
    }
}
