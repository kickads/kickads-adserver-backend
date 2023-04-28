<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $users = User::all();

    return response()->json($users);
  }

  /**
   * Display the specified resource.
   */
  public function show(User $user)
  {
    return response()->json($user);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(User $user)
  {
    $user->tokens()->delete();
//    request()->session()->regenerateToken();
//    request()->user()->currentAccessToken()->delete();


    $user->delete();

    return response()->json([
      'status' => 'success',
      'data'   => $user
    ]);
  }
}
