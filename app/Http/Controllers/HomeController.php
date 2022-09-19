<?php

namespace App\Http\Controllers;

use App\RepositoryInterface\EmployeesRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $Emp;
    public function __construct(EmployeesRepositoryInterface $Emp)
    {
        $this->Emp = $Emp;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        dd ( $this->Emp->getallemp());
        return view('home');
    }
}
