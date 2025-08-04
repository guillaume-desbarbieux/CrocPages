<?php

namespace App\Models;

use App\Http\Requests\UpdateProductRequest;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'author', 'price', 'description', 'stock', 'img_url', 'tag_id'];
    protected $hidden = ['created_at', 'updated_at'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_product');
    }
    public function isSame(UpdateProductRequest $request): array
    {
        $listErrors = [];
        foreach ($request->validated() as $key => $value) {
            if (!array_key_exists($key, $this->getAttributes())) {
                continue;
            }
            if ($value != $this->$key) {
                array_push($listErrors, [$key => $value]);
            }
        }
        return $listErrors;
    }

    public function wishUsers()
    {
        return $this->hasMany(User::class);
    }
}
