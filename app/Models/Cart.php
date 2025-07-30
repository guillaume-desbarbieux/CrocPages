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

    public function addItem(int $product_id, int $quantity): bool
    {
        $product = Product::findOrFail($product_id);
        $itemInCart = CartItem::where('cart_id', '=', $this->id)->where('product_id', '=', $product_id)->get();
        dd($itemInCart);
        if ($product->stock < $quantity) {
            return false;
        }

        // ajouter ici la logique pour modifier ou créer cartitem

        return true;
    }
}
