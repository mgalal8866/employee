<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RepositoryInterface\BranchRepositoryInterface;

class BranchController extends Controller
{
    protected $Branch;
    public function __construct(BranchRepositoryInterface $Branch)
    {
        $this->Branch = $Branch;
    }

   public function index()
   {
    return $this->Branch->getallbranch() ;
   }
}