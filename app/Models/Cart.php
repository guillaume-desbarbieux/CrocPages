<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(CartItem::class);
    }

    public function addItem($id, $quantity): bool
    {
        $product = Product::findOrFail(($id));

        if ($product->stock >= $quantity) {
            $cartItem = new CartItem();


        }
        return false;
    }
}
