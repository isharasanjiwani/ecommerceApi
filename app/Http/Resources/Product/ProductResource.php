<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'detail' => $this->detail,
            'price' => $this->price,
            'rating' => $this->reviews->count() > 0 ?round($this->reviews->sum('star')
            /$this->reviews->count(),2) : 'No found rating',
            'href' => [
                'reviews'=> route('reviews.index', $this->id)
            ]
        ];
    }
}
