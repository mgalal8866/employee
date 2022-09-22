<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\AllowancesController;
use App\Http\Controllers\Api\V1\BranchController;
use App\Http\Controllers\Api\V1\DeductionsController;
use App\Http\Controllers\Api\V1\PositionController;
use App\Http\Controllers\Api\V1\DepartmentController;
use App\Http\Controllers\Api\V1\EmployeessController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/allbranch', [BranchController::class, 'index']);
Route::get('/allposition', [PositionController::class, 'index']);
Route::get('/alldepartment', [DepartmentController::class, 'index']);

Route::get('/allallowances', [AllowancesController::class, 'index']);
Route::Post('/new/allowances', [AllowancesController::class, 'store']);
Route::Post('/delete/allowances/{id?}','AllowancesController@delete');

// Route::group(DeductionsController::class,function(){
    Route::get('/alldeductions', [DeductionsController::class, 'index']);
    Route::Post('/new/deductions','DeductionsController@store');
    Route::Post('/delete/deductions/{id?}','DeductionsController@delete');
// });
Route::get('/employe', [EmployeessController::class, 'index']);
Route::Post('/new/employe','EmployeessController@store');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
