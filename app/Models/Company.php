<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;
class Company extends Model
{
    use HasFactory;
    //protected $table = "app_companies"; agar model nomi bilan table nomi bir biriga tushmay qolsa manually tayinlash mumkin
    //protected $primaryKey = "_id"; va qaysi qator primaryKey ekanligini ham ta'yinlash mumkin
    protected $fillable = ['name', 'website', 'address', 'email'];

    public function Contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
