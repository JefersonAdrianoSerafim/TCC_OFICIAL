<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commitment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name_commitment',
        'description_commitment',
        'date_commitment',
        'id_subject_fk'
    ];
    public function commitment_category(): HasMany
    {
        return $this->hasMany(Commitment_Category::class);

    }

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
}
