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
        return [
            "name" => $this->name,
            "description" => $this->details,
            "price" => $this->price,
            "stock" => $this->stock == 0 ? "Out Of Stock": $this->stock,
            "discount" => $this->discount,
            "TotalPrice"  => round((1-($this->discount/100))*$this->price),
            "ratings" => round($this->reviews()->sum("stars")/$this->reviews()->count(),2),
            "href" => [
                "reviews" => route("reviews.index",["product"=> $this->id]),
            ]
        ];
    }
}
