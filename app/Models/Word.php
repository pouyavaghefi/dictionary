<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $table = 'words';
    protected $guarded = [];

    // Constants: কোডের ভেতরে 'magic numbers' ব্যবহার না করার জন্য এগুলো ডিফাইন করা হয়।
    const CREATOR_SYSTEM = 0; // system 
    const CREATOR_USER   = 1; // manual user

    public function synonyms()
    {
        return $this->belongsToMany(Word::class, 'word_synonyms', 'word_id', 'synonym_id');
    }
}
