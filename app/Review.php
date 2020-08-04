<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class Review extends Model
{
    protected $fillable = [
        'name',
        'points'
    ];

    public function id($id)
    {
        return self::where("id", $id);
    }

    public function name($name)
    {
        return self::where("name", 'like', '%'.$name.'%');
    }

    public function points($points)
    {
        return self::where("points", $points);
    }
}
