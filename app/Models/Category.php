<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    use HasFactory;

    protected $fillable = [
        'id',
        'name_category',
        'description_category'
    ];
    
    public function commitment_category(): HasMany
    {
        return $this->hasMany(Commitment_Category::class);
    }
}
