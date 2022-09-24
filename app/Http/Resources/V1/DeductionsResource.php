<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class DeductionsResource extends JsonResource
{
 
    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'name'          => $this->name,
            'description'   => $this->description??'N/A',
            'amount'        => $this->amount??'N/A',
        ];
    }
}
