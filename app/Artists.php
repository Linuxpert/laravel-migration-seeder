<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artists extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'surname',
        'stage_name',
        'date_of_birth',
        'age'
    ];
}
