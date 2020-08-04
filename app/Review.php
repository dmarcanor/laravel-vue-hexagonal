<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Practice\ReviewSys\Review\Infrastructure\Filters\ReviewFilters;

class Review extends Model
{
    protected $fillable = [
        'name',
        'points'
    ];

    public function scopeFilters($query, $clause)
    {
        $filter = new ReviewFilters();

        return $filter->apply($query, $clause);
    }

}
