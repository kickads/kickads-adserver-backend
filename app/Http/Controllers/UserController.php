<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
  private UserRepository $userRepository;

  public function __construct(UserRepository $userRepository)
  {
    $this->userRepository = $userRepository;
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return response()->json($this->userRepository->all());
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
    $oldUser = $this->userRepository->updateRole($request, $user);

    return response()->json($oldUser->roles);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(User $user)
  {
    $user->tokens()->delete();
//    request()->session()->regenerateToken();
//    request()->user()->currentAccessToken()->delete();

    $this->userRepository->delete($user);

    return response()->json([
      'status' => 'success',
      'data'   => $user
    ]);
  }
}
