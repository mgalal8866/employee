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
   public function store(Request $request)
   {
    return $this->Position->Createposition($request->all());
   }
   public function edit(Request $request)
   {
     return $this->Position->Edit($request) ;
   }
   public function Delete($id)
   {
    return $this->Position->DeletePosition($id) ;
   }
}
