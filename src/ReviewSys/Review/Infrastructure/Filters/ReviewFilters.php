<?php

declare(strict_types=1);


namespace Practice\ReviewSys\Review\Infrastructure\Filters;


use Illuminate\Database\Eloquent\Builder;


final class ReviewFilters
{
    private $builder;

    public function apply(Builder $builder, $clause)
    {
        $this->builder = $builder;

        foreach ($clause AS $filter => $value) {
            if (method_exists($this, $filter)) {
                call_user_func_array([$this, $filter], [$value]);
            }
        }

        return $builder;
    }

    public function id($id)
    {
        return $this->builder->where("id", $id);
    }

    public function name($name)
    {
        return $this->builder->where("name", 'like', '%'.$name.'%');
    }

    public function points($points)
    {
        return $this->builder->where("points", $points);
    }
}
