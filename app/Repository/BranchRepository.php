<?php

namespace App\Repository;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Model;
use App\Http\Resources\V1\BranchResource;
use App\RepositoryInterface\BranchRepositoryInterface;


class BranchRepository implements BranchRepositoryInterface
{

    protected $model,$BranchResource;
    // public function __construct(Model $model)
    public function __construct()
    {
        $this->model = Branch::class;
        $this->Resource = BranchResource::class;
    }

    public function getallbranch()
    {
        return  $this->Resource::collection($this->model::all());
    }

    public function Createbranch($requset)
    {
        $date = $this->model::create($requset);
        if($date){
         return  $this->Resource::collection($this->model::all());
        };

    }
    public function DeleteBranch($id)
    {
        $date = $this->model::find($id);
        $date->delete();
       if($date){
        return  $this->Resource::collection($this->model::all());
       };
    }

}
