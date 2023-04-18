<?php

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

  Route::get('/auth/google/redirect', function () {
    return Socialite::driver('google')->stateless()->redirect();
  })->name('google.redirect');

  Route::get('/auth/google/callback', function () {
    $user = Socialite::driver('google')->stateless()->user();

    dd($user);
  })->name('google.callback');
