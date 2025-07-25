<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $fillable = ['name', 'author', 'price', 'img_url'];
}
