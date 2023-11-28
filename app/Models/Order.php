<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'coupon_id',
        'amount',
        'coupon_amount',
        'payable_amount',
        'order_generate_id',
        'payment_gateway_id',
        'order_note',
        'method',
        'type',
        'status',
    ];


    public function order_billing_address()
    {
        return $this->belongsTo(OrderBillingAddress::class, 'id', 'order_id');
    }

    public function order_ship_address()
    {
        return $this->belongsTo(OrderShipAddress::class, 'id', 'order_id');
    }

    public function order_detail()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function coupon()
    {
        return $this->belongsTo(Coupon::class, 'id', 'order_id');
    }

}
