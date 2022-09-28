<?php

namespace App\RepositoryInterface;

interface  DepartmentRepositoryInterface{
     public function getallDepartment();
     public function CreateDepartment($requset);
     public function DeleteDepartment($id);
     public function Edit($requset);
}

