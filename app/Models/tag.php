<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
        public function products()
    {
        return $this->hasMany(product::class);
    }
}
