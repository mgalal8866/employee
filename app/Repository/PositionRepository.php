<?php

namespace App\Repository;

use App\Http\Resources\V1\PositionResource;
use App\Models\Position;
use Illuminate\Database\Eloquent\Model;
use App\RepositoryInterface\PositionRepositoryInterface;

class PositionRepository implements PositionRepositoryInterface
{

    protected $model;
    // public function __construct(Model $model)
    public function __construct()
    {
        $this->model = Position::class;
        $this->Resource = PositionResource::class;
    }

    public function getallposition()
    {
        return  $this->Resource::collection($this->model::all());
    }

    public function Createposition($requset)
    {
        $date = $this->model::create($requset);
        if($date){
         return  $this->Resource::collection($this->model::all());
        };

    }
    public function DeletePosition($id)
    {
        $date = $this->model::find($id);
        $date->delete();
       if($date){
        return  $this->Resource::collection($this->model::all());
       };
    }

}
