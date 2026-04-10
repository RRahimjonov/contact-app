<?php

namespace App\Models\Scopes;

trait SimpleSoftDeletes
{
    public static function bootSimpleSoftDeletes()
    {
        static::addGlobalScope(new SimpleSoftDeletingScope);
    }
}
