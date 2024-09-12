<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id_subject',
        'name_subject',
        'teacher_subject',
        'color_subject',
        'startdate_subject',
        'enddate_subject',
        'id_team_fk'
    ];
    public function commitment(): HasMany
    {
        return $this->hasMany(Commitment::class);
    }
    
    public function user_subject(): HasMany
    {
        return $this->hasMany(User_Subject::class);
    }

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
