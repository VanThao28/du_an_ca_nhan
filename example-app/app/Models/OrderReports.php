<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderReports extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'product_quantity',
        'order_quantity',
        'total_price',
    ];
}
