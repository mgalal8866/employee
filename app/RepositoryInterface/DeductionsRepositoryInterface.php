<?php

namespace App\RepositoryInterface;

interface  DeductionsRepositoryInterface{
     public function getallDeductions();
     public function CreateDeductions($requset);
     public function DeleteDeductions($id);
     public function Edit($requset);
}

