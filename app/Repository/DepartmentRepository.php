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
    }

    public function getalldepartment()
    {
        return DepartmentResource::collection($this->model::all());
    }

    public function Createdepartment($requset)
    {
        $this->model::create(array_merge($requset->all()));
    }
}
