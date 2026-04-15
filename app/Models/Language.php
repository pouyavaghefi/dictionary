<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'languages';
    protected $guarded = [];

    /**
     * A language has many words.
     */
    public function words()
    {
        return $this->hasMany(Word::class);
    }
}
