<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $fillable = [
        'name',
        'amount',
        'year',
        'month',
        'category_id',
    ];
    //
}
