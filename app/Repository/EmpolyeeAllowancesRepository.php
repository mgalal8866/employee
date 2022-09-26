<?php

namespace App\Repository;

use App\Models\EmpolyeeAllowances;
use App\Http\Resources\V1\EmpolyeeAllowancesResource;
use App\RepositoryInterface\EmpolyeeAllowancesRepositoryInterface;

class EmpolyeeAllowancesRepository implements EmpolyeeAllowancesRepositoryInterface
{

    protected $model;
    public function __construct()
    {
        $this->model = EmpolyeeAllowances::class;
        $this->Resource =EmpolyeeAllowancesResource::class;
    }

    public function getall()
    {
        return $this->Resource::collection($this->model::all());
    }
    public function Create($requset)
    {
        $date = $this->model::create($requset->all());
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

}
