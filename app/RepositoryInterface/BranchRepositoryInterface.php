<?php

namespace App\RepositoryInterface;

interface  BranchRepositoryInterface{
     public function getallbranch();
     public function Createbranch($requset);
     public function DeleteBranch($id);
     public function Edit($requset);
}

