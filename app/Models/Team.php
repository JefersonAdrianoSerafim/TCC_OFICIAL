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
        'id_team',
        'name_team',
        'color_team'
    ];
    public function user_team(): HasMany
    {
        return $this->hasMany(User_Team::class);
    }

    public function subject(): HasMany
    {
        return $this->hasMany(Subject::class);
    }
}
