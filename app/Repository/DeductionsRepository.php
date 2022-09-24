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
        $this->Resource =DeductionsResource::class;
    }

    public function getallDeductions()
    {
        return $this->Resource::collection($this->model::all());
    }
    public function CreateDeductions($requset)
    {
        $date = $this->model::create($requset->all());
       if($date){
        return $this->Resource::collection($this->model::all());
       };
    }
    public function DeleteDeductions($id)
    {
        $date = $this->model::find($id);
        $date->delete();
       if($date){
        return $this->Resource::collection($this->model::all());
       };
    }

}
