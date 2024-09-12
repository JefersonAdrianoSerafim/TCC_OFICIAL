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
    public function commitment(): BelongsTo
    {
        return $this->belongsTo(Commitment::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
