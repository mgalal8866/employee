<?php

namespace App\Repository;

use App\Models\Employees;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\EmployeRequest;
use Illuminate\Database\Eloquent\Model;
use App\Http\Resources\V1\EmployeessResource;
use App\RepositoryInterface\EmployeesRepositoryInterface;

class EmployeesRepository implements EmployeesRepositoryInterface
{

    protected $model;
    // public function __construct(Model $model)
    public function __construct()
    {
        $this->model = Employees::class;
    }

    public function getallemp()
    {
        return EmployeessResource::collection($this->model::all());
    }

    public function CreateEmp( $requset)
    {
        $date = $this->model::create(array_merge($requset->all(),['attache'=>json_decode($requset->attache)]));
       if($date){
        return EmployeessResource::collection($this->model::all());
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
}
