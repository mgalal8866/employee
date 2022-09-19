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
    }

    public function getallposition()
    {
        return PositionResource::collection($this->model::all());
    }

     
}
