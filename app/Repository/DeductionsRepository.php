<?php

namespace App\Repository;


use App\Models\Deductions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use App\Http\Resources\V1\DeductionsResource;
use App\RepositoryInterface\DeductionsRepositoryInterface;

class DeductionsRepository implements DeductionsRepositoryInterface
{

    protected $model;
    public function __construct()
    {
        $this->model = Deductions::class;
    }

    public function getallDeductions()
    {
        return DeductionsResource::collection($this->model::all());
    }
    public function CreateDeductions($requset)
    {
        $date = $this->model::create($requset->all());
       if($date){
        return DeductionsResource::collection($this->model::all());
       };
    }
    public function DeleteDeductions($id)
    {
        $date = $this->model::find($id);
        $date->delete();
       if($date){
        return DeductionsResource::collection($this->model::all());
       };
    }

}
