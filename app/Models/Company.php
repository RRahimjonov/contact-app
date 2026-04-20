<?php

namespace App\Models;

use App\Models\Scopes\AllowedFilterSearch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes, AllowedFilterSearch;
    //protected $table = "app_companies"; agar model nomi bilan table nomi bir biriga tushmay qolsa manually tayinlash mumkin
    //protected $primaryKey = "_id"; va qaysi qator primaryKey ekanligini ham ta'yinlash mumkin
    protected $fillable = ['name', 'website', 'address', 'email'];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
