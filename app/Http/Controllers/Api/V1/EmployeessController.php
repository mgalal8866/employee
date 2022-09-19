<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeRequest;
use App\RepositoryInterface\EmployeesRepositoryInterface;
use Illuminate\Http\Request;

class EmployeessController extends Controller
{
    protected $Employees;
    public function __construct(EmployeesRepositoryInterface $Employees)
    {
        $this->Employees = $Employees;
    }

   public function index()
   {
    return $this->Employees->getallemp() ;
   }

   public function Store(EmployeRequest $request)
   {
        return $this->Employees->CreateEmp($request) ;
   }

}
