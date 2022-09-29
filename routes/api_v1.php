<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('VerifyAPIKey')->group(function() {
    Route::controller(EmployeessController::class)->group(function() {
        Route::get('/employe','index');
        Route::Post('/new/employe','store');
        Route::Post('/edit/employe','edit');
        Route::get('/delete/employe/{id?}','delete');
    });
    Route::controller(BranchController::class)->group(function() {
        Route::get('/allbranch', 'index');
        Route::Post('/new/branch','store');
        Route::Post('/edit/branch','edit');
        Route::get('/delete/branch/{id?}','delete');
    });
    Route::controller(PositionController::class)->group(function() {
        Route::get('/allposition', 'index');
        Route::Post('/new/position','store');
        Route::Post('/edit/position','edit');
        Route::get('/delete/position/{id?}','delete');
    });
    Route::controller(DepartmentController::class)->group(function() {
        Route::get('/alldepartment', 'index');
        Route::Post('/new/department','store');
        Route::Post('/edit/department','edit');
        Route::get('/delete/department/{id?}','delete');
    });
    Route::controller(AllowancesController::class)->group(function() {
        Route::get('/allallowances', 'index');
        Route::Post('/new/allowances','store');
        Route::Post('/edit/allowances','edit');
        Route::get('/delete/allowances/{id?}','delete');
    });
    Route::controller(DeductionsController::class)->group(function() {
        Route::get('/alldeductions', 'index');
        Route::Post('/new/deductions','store');
        Route::Post('/edit/deductions','edit');
        Route::get('/delete/deductions/{id?}','delete');
    });
    Route::controller(EmpolyeeAllowancesController::class)->group(function() {
        Route::get('/get/empolyee/allowances', 'index');
        Route::Post('/add/empolyee/allowances','store');
        Route::Post('/edit/empolyee/allowances','edit');
        Route::get('/delete/empolyee/allowances/{id?}','delete');
        Route::get('/getbyid/empolyee/allowances/{id?}','getallowancesbyidemp');
    });
    Route::controller(EmpolyeeDeductionsController::class)->group(function() {
        Route::get('/get/empolyee/deductions', 'index');
        Route::Post('/add/empolyee/deductions','store');
        Route::Post('/edit/empolyee/deductions','edit');
        Route::get('/delete/empolyee/deductions/{id?}','delete');
        Route::get('/getbyid/empolyee/deductions/{id?}','getdeductionsbyidemp');
    });
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
