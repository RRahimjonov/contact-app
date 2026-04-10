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
    protected function sortByNameAlpha(Builder $query): void
    {
        $query->orderBy('first_name');
    }

    #[Scope]
    protected function filterByCompany(Builder $query): void
    {
        if ($companyId = request('company_id')) {
            $query->where('company_id', $companyId);
        }
    }

    #[Scope]
    protected function search(Builder $query): void
    {
        if ($search = request('search')) {
            $query->where('first_name', 'like', '%' . $search . '%')
                ->orWhere('last_name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('phone', 'like', '%' . $search . '%');
        }
    }

}


