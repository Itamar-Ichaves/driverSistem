<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderServiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
        'identify' => $this->uuid,
        'vehiclePlate' => $this->vehiclePlate,
        'entryDateTime' => Carbon::make($this->created_at)->format('Y-m-d'),
        'exitDateTime' => Carbon::make($this->updated_at)->format('Y-m-d'),
        'priceType' => $this->priceType,
        'price' => $this->price,


        ];
    }
}
