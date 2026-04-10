<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;

trait AllowedFilterSearch
{
    #[Scope]
    protected function allowedFilters(Builder $query, ...$keys): void
    {
        foreach ($keys as $key){
            if ($value = request($key)) {
                $query->where($key, $value);
            }
        }
    }

    #[Scope]
    protected function allowedSearches(Builder $query, ...$keys): void
    {
        if ($search = request('search')) {
            foreach ($keys as $index => $key){
                $method = $index == 0 ? 'where' : 'orWhere';
                $query->{$method}($key, 'like', '%' . $search . '%');
            }
        }
    }

    #[Scope]
    protected function allowedTrash(Builder $query): void
    {
        if(request()->query('trash')){
            $query->onlyTrashed();
        }
    }
}
