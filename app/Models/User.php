<?php

namespace App\Models;

 use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
 use Illuminate\Support\Facades\Storage;

 #[Fillable(['name', 'email', 'phone', 'company', 'country', 'address', 'profile_picture', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function companies()
    {
        return $this->hasMany(Company::class);
    }

    public function profilePicture()
    {
        if($this->profile_picture && Storage::exists($this->profile_picture)){
            return Storage::url($this->profile_picture);
        }
        return "https://ui-avatars.com/api/?name=".$this->name."&size=150";
    }
}
