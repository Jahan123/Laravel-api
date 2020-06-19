<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
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
            "customer" => $this->customer,
            "review" => $this->review,
            "stars" => $this->stars,
            "href" => [
                "link" => route("products.show",["product"=> $this->product_id]),
            ]
            ];
    }
}
