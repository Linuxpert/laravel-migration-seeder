<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'album',
        'number_of_plays',
        'musical_genre'
    ];
}
