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
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'commitment_categories', 'id_commitment_fk', 'id_category_fk');

    }

    public function subjects()
    {
        return $this->belongsTo(Subject::class, 'id_subject_fk');
    }
}
