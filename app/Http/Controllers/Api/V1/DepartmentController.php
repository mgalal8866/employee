<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RepositoryInterface\DepartmentRepositoryInterface;

class DepartmentController extends Controller
{
    protected $Department;
    public function __construct(DepartmentRepositoryInterface $Department)
    {
        $this->Department = $Department;
    }

   public function index()
   {
    return $this->Department->getallDepartment() ;
   }
   public function store(Request $request)
   {
    return $this->Department->Createdepartment($request->all());
   }
   public function Delete($id)
   {
    return $this->Department->DeleteDepartment($id) ;
   }
}
