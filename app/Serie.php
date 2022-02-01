<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = [

        'title',
        'author',
        'release_date',
        'rating'

    ];
}
