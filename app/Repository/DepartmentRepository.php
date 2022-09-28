<?php

namespace App\Repository;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use App\Http\Resources\V1\DepartmentResource;
use App\RepositoryInterface\DepartmentRepositoryInterface;


class DepartmentRepository implements DepartmentRepositoryInterface
{

    protected $model;
    // public function __construct(Model $model)
    public function __construct()
    {
        $this->model = Department::class;
        $this->Resource =DepartmentResource::class;
    }

    public function getalldepartment()
    {
        return $this->Resource::collection($this->model::all());
    }


    public function Createdepartment($requset)
    {
        $date = $this->model::create($requset);
        if($date){
         return  $this->Resource::collection($this->model::all());
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
    
    public function DeleteDepartment($id)
    {
        $date = $this->model::find($id);
        $date->delete();
       if($date){
        return  $this->Resource::collection($this->model::all());
       };
    }
}
