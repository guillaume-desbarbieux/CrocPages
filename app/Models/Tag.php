<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
        public function products()
    {
        return $this->belongsToMany(Product::class, 'tag_product');
    }
}
