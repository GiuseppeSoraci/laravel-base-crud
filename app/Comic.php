<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    // Mass assign. (fillable)
    protected $fillable = [
        'title',
        'series',
        'sale_date',
        'price',
        'type',
        'description',
        'thumb',
    ];
}
