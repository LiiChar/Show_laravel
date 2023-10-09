<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Orchid\Screen\AsSource;

class Order_item extends Model
{
    use HasFactory, AsSource;



    protected $fillable = [
        'id',
        'price',
        'quantity',
        'category_id',
        'product_id',
        'order_id'
    ];

    public function product(): HasOne
    {
        return $this->hasOne(Product::class);
    }
}
