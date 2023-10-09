<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Orchid\Screen\AsSource;

class Order extends Model
{
    use HasFactory, AsSource;


    protected $fillable = [
        'delivery_type',
        'status',
        'payment_type',
        'total_price',
        'created_at',
        'updated_at'
    ];

    public function order_item () {
        return $this->hasMany(Order_item::class, 'order_id', 'id');
    }
}
