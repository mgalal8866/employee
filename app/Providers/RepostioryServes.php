<?php

namespace App\Providers;

use App\Repository\AllowancesRepository;
use App\Repository\BranchRepository;
use App\Repository\DeductionsRepository;
use App\Repository\PositionRepository;
use App\Repository\EmployeesRepository;
use Illuminate\Support\ServiceProvider;


use App\Repository\DepartmentRepository;
use App\Repository\EmpolyeeAllowancesRepository;
use App\Repository\EmpolyeeDeductionsRepository;
use App\RepositoryInterface\AllowancesRepositoryInterface;
use App\RepositoryInterface\BranchRepositoryInterface;
use App\RepositoryInterface\DeductionsRepositoryInterface;
use App\RepositoryInterface\PositionRepositoryInterface;
use App\RepositoryInterface\EmployeesRepositoryInterface;
use App\RepositoryInterface\DepartmentRepositoryInterface;
use App\RepositoryInterface\EmpolyeeAllowancesRepositoryInterface;
use App\RepositoryInterface\EmpolyeeDeductionsRepositoryInterface;

class RepostioryServes extends ServiceProvider
{
    public function register()
    {


        $this->app->bind(EmployeesRepositoryInterface::class,EmployeesRepository::class);
        $this->app->bind(BranchRepositoryInterface::class,BranchRepository::class);
        $this->app->bind(DepartmentRepositoryInterface::class,DepartmentRepository::class);
        $this->app->bind(PositionRepositoryInterface::class,PositionRepository::class );
        $this->app->bind(DeductionsRepositoryInterface::class,DeductionsRepository::class);
        $this->app->bind(AllowancesRepositoryInterface::class,AllowancesRepository::class);
        $this->app->bind(EmpolyeeAllowancesRepositoryInterface::class,EmpolyeeAllowancesRepository::class);
        $this->app->bind(EmpolyeeDeductionsRepositoryInterface::class,EmpolyeeDeductionsRepository::class);
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
