<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Orchid\Screen\AsSource;

class Product extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'id',
        'name',
        'description',
        'price',
        'image',
        'stock',
        'attributes',
        'created_at',
        'updated_at'
    ];

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }
}
