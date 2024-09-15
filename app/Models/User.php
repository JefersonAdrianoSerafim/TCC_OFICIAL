<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'name_user',
        'email_user',
        'password_user'
    ];
    public function user_team(): HasMany
    {
        return $this->hasMany(User_Team::class);
    }

    public function user_subject(): HasMany
    {
        return $this->hasMany(User_Subject::class);
    }
}
