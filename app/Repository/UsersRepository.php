<?php

namespace App\Repository;

use App\Models\Employees;
use Illuminate\Database\Eloquent\Model;
use App\Http\Resources\V1\EmployeessResource;
use App\RepositoryInterface\UsersRepositoryInterface;

class UsersRepository implements UsersRepositoryInterface
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

    public function CreateEmp($requset)
    {
        $this->model::create(array_merge($requset->all(),['attache'=>json_decode($requset->attache)]));
    }
}
