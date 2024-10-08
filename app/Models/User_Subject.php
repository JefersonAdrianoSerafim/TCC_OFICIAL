<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Subject extends Model
{
    use HasFactory;

    protected $table = 'user_subjects';

    protected $fillable = [
        'id_user_fk',
        'id_subject_fk'
    ];
    public function users(): BelongsTo
    {
        return $this->belongsToMany(User::class, 'id_user_fk');
    }

    public function subjects(): BelongsTo
    {
        return $this->belongsToMany(Subject::class, 'id_subject_fk');
    }
}
