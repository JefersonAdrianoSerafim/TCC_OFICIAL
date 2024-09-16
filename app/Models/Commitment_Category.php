<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commitment_Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_category_fk',
        'id_commitment_fk'
    ];
    public function commitments(): BelongsTo
    {
        return $this->belongsToMany(Commitment::class);
    }

    public function categories(): BelongsTo
    {
        return $this->belongsToMany(Category::class);
    }
}
