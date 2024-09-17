<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    
    protected $fillable = [
        'id',
        'name',
        'email',
        'password'
    ];

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'user_teams','id_user_fk', 'id_team_fk');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'user_subjects','id_user_fk', 'id_subject_fk');
    }


}
