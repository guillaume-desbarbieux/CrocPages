<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['title', 'author', 'price', 'description', 'stock', 'img_url', 'tag_id'];

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
