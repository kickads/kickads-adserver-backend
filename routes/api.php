<?php

use App\Http\Controllers\AdvertiserController;
use App\Http\Controllers\BusinessModelController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\DealController;
use App\Http\Controllers\EntityController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Pruebas con React
Route::controller(AuthController::class)->prefix('auth')->group(function () {
  Route::post('login', 'login');
  Route::post('logout', 'logout')->middleware('auth:sanctum');
});

Route::apiResource('business-models', BusinessModelController::class);
Route::apiResource('countries', CountryController::class);
Route::apiResource('entities', EntityController::class);
Route::apiResource('currencies', CurrencyController::class);
Route::apiResource('companies', CompanyController::class);
Route::apiResource('advertisers', AdvertiserController::class);
Route::apiResource('roles', RoleController::class);
Route::apiResource('deals', DealController::class);

Route::middleware(['auth:sanctum', 'role:admin'])->group(function () {
  Route::apiResource('users', UserController::class);
});