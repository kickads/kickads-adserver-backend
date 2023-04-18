<?php

use App\Http\Controllers\GoogleAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});

Route::controller(GoogleAuthController::class)->group(function () {
  Route::get('/auth/google/redirect', 'googleAuthRedirect')->name('google.redirect');
  Route::get('/auth/google/callback', 'googleAuthLogin')->name('google.login');
});

Route::get('/', function () {
  return view('welcome');
})->name('welcome');

Route::get('/success', function () {
  return view('success');
})->name('success');
