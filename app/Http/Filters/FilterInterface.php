<?php

namespace App\Http\Filters;

use Illuminate\Contracts\Database\Eloquent\Builder;

interface FilterInterface
{
    public function apply(Builder $builder);
}
