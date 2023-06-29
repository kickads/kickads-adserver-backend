<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    $users = $this->userRepository->all()->except(Auth::user()->id);

    return jsend_success(new UserCollection($users));
  }

  /**
   * Display the specified resource.
   */
  public function show(User $user)
  {
    return jsend_success($this->userRepository->find($user));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, User $user)
  {
    $userUpdated = $this->userRepository->updateRole($request, $user);

    return jsend_success($userUpdated->roles);
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

    return jsend_success($user);
  }

  public function getAuthUser()
  {
    return jsend_success(new UserResource($this->userRepository->getAuthUser()));
  }
}
