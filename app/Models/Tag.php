<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];
    // protected $hidden = ['pivot', 'created_at', 'updated_at'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'tag_product');
    }
}
