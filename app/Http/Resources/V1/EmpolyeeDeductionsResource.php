<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class EmpolyeeDeductionsResource  extends JsonResource
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
            'id'            => $this->id,
            'name'          => $this->deductions->name??'NA',
            'type'          => ($this->type == 1)?'Once':($this->type == 2?'Monthly':'Yearly'),
            'effective_date'=> $this->effective_date??'N/A',
            'amount'        => $this->amount??'N/A',
            ];
    }
}
