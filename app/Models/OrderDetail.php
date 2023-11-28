<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_id',
        'product_id',
        'product_name',
        'amount',
        'quantity',
        'total_amount',
    ];


    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
