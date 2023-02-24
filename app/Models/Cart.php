<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->BelongsTo(User::class)->withTimestamps();
    }
    public function product()
    {
        return $this->belongsToMany(Product::class,'cart_product')->withPivot('product_id')->withTimestamps();
    }
}
