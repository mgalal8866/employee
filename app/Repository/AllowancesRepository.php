<?php

namespace App\Repository;

use App\Models\Allowances;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use App\Http\Resources\V1\AllowancesResource;
use App\RepositoryInterface\AllowancesRepositoryInterface;

class AllowancesRepository implements AllowancesRepositoryInterface
{

    protected $model;
    // public function __construct(Model $model)
    public function __construct()
    {
        $this->model = Allowances::class;
        $this->Resource = AllowancesResource::class;
    }

    public function getallAllowances()
    {
        return  $this->Resource::collection($this->model::all());
    }

    public function CreateAllowances($requset)
    {
        $date = $this->model::create($requset->all());
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
    public function DeleteAllowances($id)
    {
        $date = $this->model::find($id);
        $date->delete();
       if($date){
        return   $this->Resource::collection($this->model::all());
       };
    }


}
