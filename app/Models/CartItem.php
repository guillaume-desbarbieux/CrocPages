<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = ['quantity', 'cart_id', 'product_id'];
    public $timestamps = false;

    public function cart()
    {
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function product()
    {
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function quantity()
    {
        return $this->quantity;
    }
}
