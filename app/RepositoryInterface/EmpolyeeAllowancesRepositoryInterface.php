<?php

namespace App\RepositoryInterface;


interface  EmpolyeeAllowancesRepositoryInterface{
     public function getall();
     public function Create($requset);
     public function Edit($requset);
     public function GetByIdEmp($id);

}

