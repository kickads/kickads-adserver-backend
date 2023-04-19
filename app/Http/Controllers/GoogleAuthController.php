<?php

namespace App\Http\Controllers;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
  public function googleAuthRedirect()
  {
    return Socialite::driver('google')->stateless()->redirect();
  }

  public function googleAuthLogin(string $accessToken)
  {
    $googleUser = Socialite::driver('google')->userFromToken($accessToken);

    $user = User::updateOrCreate([
      'google_id' => $googleUser->id,
    ], [
      'google_id'            => $googleUser->id,
      'name'                 => $googleUser->name,
      'email'                => $googleUser->email,
      'avatar'               => $googleUser->avatar,
      'google_token'         => $googleUser->token,
      'google_refresh_token' => $googleUser->refreshToken,
    ]);

    return response()->json([
      'user'      => $user,
      'api_token' => $user->createToken('api_token')->plainTextToken
    ]);
  }
}
