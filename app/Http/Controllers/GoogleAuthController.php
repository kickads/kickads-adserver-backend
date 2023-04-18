<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
  public function googleAuthRedirect()
  {
    return Socialite::driver('google')->stateless()->redirect();
  }

  public function googleAuthLogin()
  {
    $googleUser = Socialite::driver('google')->stateless()->user();

    User::updateOrCreate([
      'google_id' => $googleUser->id,
    ], [
      'google_id'            => $googleUser->id,
      'name'                 => $googleUser->name,
      'email'                => $googleUser->email,
      'avatar'               => $googleUser->avatar,
      'google_token'         => $googleUser->token,
      'google_refresh_token' => $googleUser->refreshToken,
    ]);

//    Auth::login($user);

    return to_route('success');
  }
}
