<?php

namespace App\Repository;

use App\Models\EmpolyeeDeductions;
use App\Http\Resources\V1\EmpolyeeDeductionsResource;
use App\RepositoryInterface\EmpolyeeDeductionsRepositoryInterface;

class EmpolyeeDeductionsRepository implements EmpolyeeDeductionsRepositoryInterface
{

    protected $model;
    public function __construct()
    {
        $this->model = EmpolyeeDeductions::class;
        $this->Resource =EmpolyeeDeductionsResource::class;
    }

    public function getall()
    {
        return $this->Resource::collection($this->model::all());
    }
    public function Create($requset)
    {
        $date = $this->model::create($requset->all());
       if($date){
        return $this->Resource::collection($this->model::whereEmployeeId($date->employee_id)->get());
       };
    }
    public function Edit($requset)
    {
        $date = $this->model::find($requset->id);
        $date = $date->update($requset->all());
       if($date){
        return $this->Resource::collection($this->model::all());
       };
    }
    public function Delete($id)
    {
        $date = $this->model::find($id);
        $date->delete();
       if($date){
        return $this->Resource::collection($this->model::all());
       };
    }
    public function GetByIdEmp($id)
    {

        $date = $this->model::whereEmployeeId($id)->get();

       if($date){
        return $this->Resource::collection($date);
       };
    }

}
