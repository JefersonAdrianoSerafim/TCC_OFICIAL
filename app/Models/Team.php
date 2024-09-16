<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'name_team',
        'color_team'
    ];
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_teams','id_user_fk', 'id_team_fk');
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
