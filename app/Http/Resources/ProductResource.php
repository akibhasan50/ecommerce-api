<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'name' => $this->name,
            'description' => $this->details,
            'price' => $this->price,
            'discount' => $this->discount,
            'stock' => $this->stock,
            'rating' =>$this->reviews->count() > 0 ? round($this->reviews->sum('star')/$this->reviews->count()) : "No Rating yet",
            'create date' => $this->created_at,
            'href' => [
                'reviews' => route('reviews.index',$this->id),
            ]
        ];
    }
}
