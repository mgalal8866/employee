<?php
namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;


use App\Models\EmpolyeeAllowances;
use App\RepositoryInterface\EmpolyeeAllowancesRepositoryInterface;
use Illuminate\Http\Request;

class EmpolyeeAllowancesController extends Controller
{
    protected $EmpolyeeAllowances;
    public function __construct(EmpolyeeAllowancesRepositoryInterface $EmpolyeeAllowances)
    {
        $this->EmpolyeeAllowances = $EmpolyeeAllowances;
    }
    public function index()
    {
        return $this->EmpolyeeAllowances->getall() ;
    }
    public function store(Request $request)
    {
        return $this->EmpolyeeAllowances->Create($request) ;
    }

}
