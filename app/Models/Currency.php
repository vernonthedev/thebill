<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $fillable = [
        'id',
        'currency_name',
        'market_cap',
        'duration'
    ];
}
