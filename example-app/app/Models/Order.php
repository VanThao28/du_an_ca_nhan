<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'couponCode',
        'name',
        'email',
        'phone',
        'address',
        'city',
        'status',
        'appartment',
        'district',
        'toTalFinal',
        'tax',
        'toTalFinalCheckout',
        'user_id',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'orders_products');
    }
    public function OrdersProduct()
    {
        return $this->hasMany(OrdersProduct::class);
    }
}
