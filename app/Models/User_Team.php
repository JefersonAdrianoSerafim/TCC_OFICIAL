<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Team extends Model
{
    use HasFactory;

    protected $table = 'user_teams';

    protected $fillable = [
        'id_team_fk',
        'id_user_fk',
        'creator_userteam'
    ];
    public function users(): BelongsTo
    {
        return $this->belongsToMany(User::class);
    }

    public function teams(): BelongsTo
    {
        return $this->belongsToMany(Team::class);
    }
}
