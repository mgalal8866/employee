<?php

namespace App\Providers;

use App\Repository\BranchRepository;
use App\Repository\PositionRepository;
use App\Repository\EmployeesRepository;
use Illuminate\Support\ServiceProvider;

use App\Repository\DepartmentRepository;
use App\RepositoryInterface\BranchRepositoryInterface;
use App\RepositoryInterface\PositionRepositoryInterface;
use App\RepositoryInterface\EmployeesRepositoryInterface;
use App\RepositoryInterface\DepartmentRepositoryInterface;

class RepostioryServes extends ServiceProvider
{
    public function register()
    {
   
  
        $this->app->bind(EmployeesRepositoryInterface::class,EmployeesRepository::class);
        $this->app->bind(BranchRepositoryInterface::class,BranchRepository::class);
        $this->app->bind(DepartmentRepositoryInterface::class,DepartmentRepository::class);
        $this->app->bind(PositionRepositoryInterface::class,PositionRepository::class );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
