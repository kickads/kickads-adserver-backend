<?php

use App\Http\Controllers\AdvertiserController;
use App\Http\Controllers\BusinessModelController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\EntityController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//  return $request->user();
//});

// Pruebas con React
Route::controller(GoogleAuthController::class)->group(function () {
  Route::get('/auth/google/redirect', 'googleAuthRedirect')->name('google.redirect');
  Route::get('/auth/google/callback/{accessToken}', 'googleAuthLogin')->name('google.login');
});

Route::apiResource('business-models', BusinessModelController::class);
Route::apiResource('countries', CountryController::class);
Route::apiResource('entities', EntityController::class);
Route::apiResource('currencies', CurrencyController::class);
Route::apiResource('companies', CompanyController::class);
Route::apiResource('advertisers', AdvertiserController::class);
Route::apiResource('roles', RoleController::class);

Route::middleware(['auth:sanctum'])->group(function () {
  Route::apiResource('users', UserController::class);
});

// Pruebas con Laravel
Route::get('/', function () {
  return view('welcome');
})->name('welcome');

Route::get('/success', function () {
  return view('success');
})->name('success');

Route::get('/prueba', function () {
  return response()->json([
    'status' => 'success',
    'data'   => []
  ]);
})->name('success');