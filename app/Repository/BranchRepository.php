<?php

namespace App\Repository;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Model;
use App\Http\Resources\V1\BranchResource;
use App\RepositoryInterface\BranchRepositoryInterface;


class BranchRepository implements BranchRepositoryInterface
{

    protected $model;
    // public function __construct(Model $model)
    public function __construct()
    {
        $this->model = Branch::class;
    }

    public function getallbranch()
    {
        return BranchResource::collection($this->model::all());
    }

    public function CreateEmp($requset)
    {
        $this->model::create(array_merge($requset->all()));
    }
}
