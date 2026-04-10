<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Contact extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['first_name', 'last_name', 'phone', 'email', 'address', 'company_id'];

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function tasks(){
        return $this->hasMany(Task::class);
    }

    #[Scope]
    protected function allowedSorts(Builder $query, string $column): void
    {
        $query->orderBy($column);
    }

    #[Scope]
    protected function allowedFilters(Builder $query, string $key): void
    {
        if ($companyId = request($key)) {
            $query->where($key, $companyId);
        }
    }

    #[Scope]
    protected function allowedSearches(Builder $query, array $keys): void
    {
        if ($search = request('search')) {
            foreach ($keys as $index => $key){
                $method = $index == 0 ? 'where' : 'orWhere';
                $query->{$method}($key, 'like', '%' . $search . '%');
            }
        }
    }

}


