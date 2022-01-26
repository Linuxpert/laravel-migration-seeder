<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Albums extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'gold_records',
        'platinum_records',
        'number_of_songs',
        'year_of_release'
    ];
}
