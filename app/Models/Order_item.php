<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Orchid\Screen\AsSource;

class Order_item extends Model
{
    use HasFactory, AsSource;


    public function order(): HasOne
    {
        return $this->hasOne(Order::class);
    }


    public function product(): HasOne
    {
        return $this->hasOne(Product::class);
    }
}
