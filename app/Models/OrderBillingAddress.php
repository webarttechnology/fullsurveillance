<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderBillingAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_id',
        'f_name',
        'l_name',
        'company_name',
        'country',
        'street',
        'city',
        'district',
        'zip',
        'mobile',
        'email',
    ];
}
