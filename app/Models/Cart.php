<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\isEmpty;

class Cart extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
    public function items()
    {
        return $this->hasMany(CartItem::class);
    }

    public function addItem(int $product_id): bool
    {
        $product = Product::findOrFail($product_id);

        if ($product->stock > 0) {

            $itemInCart = CartItem::where('cart_id', '=', $this->id)->where('product_id', '=', $product_id)->first();

            if ($itemInCart == null) {
                CartItem::create(['quantity' => "1", 'product_id' => $product_id, 'cart_id' => $this->id]);
                return true;
            } else {
                if ($product->stock > $itemInCart->quantity) {
                    $itemInCart->addOne();
                    return true;
                }
            }
        }
        return false;
    }
}
