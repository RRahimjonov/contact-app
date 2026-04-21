<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;

trait AllowedSort
{
    #[Scope]
    protected function allowedSort(Builder $query, string $column): void
    {
        $query->orderBy($column);
    }
}
