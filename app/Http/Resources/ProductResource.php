<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
        'id' => $this->id,
        'title' => $this->title,
        'author' => $this->author,
        'img_url' => $this->img_url,
        'price' => $this->price,
        'stock' => $this->stock,
        'tags' => $this->tags->pluck('name'),
    ];
    }
}
