<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    
    use HasFactory;

    protected $fillable = [
        'coupon_name',
        'amount',
        'start_date',
        'end_date',
        'minimum_amount',
        'maximum_discount_amount',
        'type',
        'status',
    ];

}

