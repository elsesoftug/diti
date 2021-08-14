<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StockTableController;
use App\Http\Controllers\ResProductController;
use App\Http\Controllers\ResSectionController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ResCategoryController;
use App\Http\Controllers\ResSalesTableController;
use App\Http\Controllers\StockDischargeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/cafeDashboard', [HomeController::class, 'cafeDashboard'])->name('cafeDashboard');
Route::get('/pointOfsale', [HomeController::class, 'pointOfsale'])->name('pointOfsale');

Route::prefix('/')
    ->middleware('auth')
    ->group(function () {
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);

        Route::resource('users', UserController::class);
        Route::resource('stock-tables', StockTableController::class);
        Route::resource('res-sales-tables', ResSalesTableController::class);
        Route::resource('res-products', ResProductController::class);
        Route::resource('res-sections', ResSectionController::class);
        Route::resource('stock-discharges', StockDischargeController::class);
        Route::resource('res-categories', ResCategoryController::class);
    });
