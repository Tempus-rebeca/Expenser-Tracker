<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'description',
        'name',
        'amount',
        'date',
        'category_id',
    ];
    //
}
