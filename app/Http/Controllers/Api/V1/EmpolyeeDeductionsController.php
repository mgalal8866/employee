<?php
namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;

use App\Models\EmpolyeeDeductions;
use App\RepositoryInterface\EmpolyeeDeductionsRepositoryInterface;
use Illuminate\Http\Request;

class EmpolyeeDeductionsController extends Controller
{
    protected $EmpolyeeDeductions;
    public function __construct(EmpolyeeDeductionsRepositoryInterface $EmpolyeeDeductions)
    {
        $this->EmpolyeeDeductions = $EmpolyeeDeductions;
    }
    public function index()
    {}
    public function store(Request $request)
    {
        return $this->EmpolyeeDeductions->Create($request) ;
    }
    public function getdeductionsbyidemp($id)
    {
        return $this->EmpolyeeDeductions->GetByIdEmp($id) ;
    }
}
