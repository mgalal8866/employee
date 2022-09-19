<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeessResource extends JsonResource
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
                'name'          => $this->name,
                'phone'         => $this->phone??'N/A',
                'gender'        => $this->gender,
                'date_hire'     => $this->date_hire??'N/A',
                'date_birth'    => $this->date_birth??'N/A',
                'address'       => $this->address??'N/A',
                'branch'        => $this->branch->name??'N/A',
                'department_id' => $this->department->name??'N/A',
                'position_id'   => $this->position->name??'N/A',
                'selary_id'     => $this->selary_id??'N/A',
                'attache'       => $this->attache[0]['key']??'N/A',
                'state'         => $this->namestate //'<span class="badge badge-secondary">'.$this->namestate.'</span>',
                ];
    }
}
