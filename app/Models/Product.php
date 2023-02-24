<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image'
    ];
    public function cart()
    {
        return $this->belongsToMany(Cart::class)->withPivot('cart_id','products')->withTimestamps();
    }
    public function line()
    {
        return $this->hasMany(Line::class)->withTimestamps();
    }
    public function order()
    {
        return $this->hasMany(Order::class)->withTimestamps();
    }
}


