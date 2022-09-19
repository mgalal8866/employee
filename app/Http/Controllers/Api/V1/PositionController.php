<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RepositoryInterface\PositionRepositoryInterface;

class PositionController extends Controller
{
    protected $Position;
    public function __construct(PositionRepositoryInterface $Position)
    {
        $this->Position = $Position;
    }

   public function index()
   {
    return $this->Position->getallposition() ;
   }

}
