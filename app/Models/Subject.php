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
        'id',
        'name_subject',
        'teacher_subject',
        'color_subject',
        'startdate_subject',
        'enddate_subject',
        'id_team_fk'
    ];
    public function commitments()
    {
        return $this->hasMany(Commitment::class,  'id_subject_fk');
    }

    public function teams()
    {
        return $this->belongsTo(Team::class, 'id_team_fk');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_subjects','id_user_fk', 'id_subject_fk');
    }
}
