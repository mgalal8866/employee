<?php

namespace App\Http\Controllers\Api\V1;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AllowancesRequest;
use App\RepositoryInterface\AllowancesRepositoryInterface;

class AllowancesController extends Controller
{
    protected $Allowances;
    public function __construct(AllowancesRepositoryInterface $Allowances)
    {
        $this->Allowances = $Allowances;
    }

   public function index()
   {
    return $this->Allowances->getallAllowances() ;
   }

   public function Store(AllowancesRequest $request)
   {

    // return$this->validate(
    //     $request,
    //     ['name' => 'required'],
    //     ['name.required' => 'this is my custom error message for required']
    // );
     //   return $request->all();
     return $this->Allowances->CreateAllowances($request) ;
   }
   public function edit(AllowancesRequest $request)
   {
     return $this->Allowances->Edit($request) ;
   }
   public function Delete($id)
   {
    return $this->Allowances->DeleteAllowances($id) ;
   }
   
}
