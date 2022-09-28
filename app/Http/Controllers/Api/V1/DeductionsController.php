<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DeductionsRequest;
use App\RepositoryInterface\DeductionsRepositoryInterface;

class DeductionsController extends Controller
{
    protected $Deductions;
    public function __construct(DeductionsRepositoryInterface $Deductions)
    {
        $this->Deductions = $Deductions;
    }

   public function index()
   {
    return $this->Deductions->getallDeductions() ;
   }

   public function store(DeductionsRequest $request)
   {
        return $this->Deductions->CreateDeductions($request) ;
   }
   public function edit(DeductionsRequest $request)
   {
        return $this->Deductions->edit($request) ;
   }
    public function Delete($id){

        return $this->Deductions->DeleteDeductions($id) ;
    }
}
