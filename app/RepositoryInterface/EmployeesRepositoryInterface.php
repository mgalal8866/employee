<?php

namespace App\RepositoryInterface;

use App\Http\Requests\EmployeRequest;

interface  EmployeesRepositoryInterface{
     public function getallemp();
     public function CreateEmp( $requset);
     public function Edit($requset);
}

