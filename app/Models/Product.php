<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'author', 'price', 'description', 'stock', 'img_url'];

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
