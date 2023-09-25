<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Orchid\Screen\AsSource;

class Rewiew extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'text',
        'rating',
        'created_at',
        'updated_at'
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function product(): HasOne
    {
        return $this->hasOne(Product::class);
    }
}
