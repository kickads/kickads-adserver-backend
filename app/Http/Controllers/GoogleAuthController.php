<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
  public function googleAuthLogin(Request $request)
  {
    $accessToken = $request->input('accessToken');
    $googleUser = Socialite::driver('google')->userFromToken($accessToken);

    $user = User::updateOrCreate([
      'email' => $googleUser->email,
    ], [
      'google_id'            => $googleUser->id,
      'name'                 => $googleUser->name,
      'email'                => $googleUser->email,
      'avatar'               => $googleUser->avatar,
      'google_token'         => $googleUser->token,
      'google_refresh_token' => $googleUser->refreshToken,
    ]);

    if (!$user->hasRole(User::ROLES_ENABLED)) {
      $user->assignRole('guest');
    }

    return response()->json([
      'user'      => $user,
      'api_token' => $user->createToken('api_token')->plainTextToken
    ]);
  }
}
