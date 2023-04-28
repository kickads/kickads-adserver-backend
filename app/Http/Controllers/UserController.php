<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
   * Update the specified resource in storage.
   */
  public function update(Request $request, User $user)
  {
    $oldUser = User::find($user->id);
    $oldUser->is_enabled = $request->is_enabled;
    $oldUser->save();

    return response()->json($oldUser);
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
