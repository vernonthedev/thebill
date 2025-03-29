<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use ApiPlatform\Metadata\ApiResource;

// Expose the currency model as an api to api platform
#[ApiResource(
    paginationItemsPerPage:1,
)]
class Currency extends Model
{
    protected $fillable = [
        'id',
        'currency_name',
        'market_cap',
        'duration'
    ];
}
