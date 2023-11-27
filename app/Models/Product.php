<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'sub_category_id',
        'name',
        'actual_price',
        'discount_price',
        'desc',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function product_image()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function wishlist()
    {
        return $this->belongsTo(Wishlist::class);
    }

}
