<?php

namespace App\RepositoryInterface;
use App\Http\Requests\AllowancesRequest;


interface  AllowancesRepositoryInterface{
     public function getallAllowances();
     public function CreateAllowances($requset);
     public function DeleteAllowances($id);
}

