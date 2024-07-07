<?php

namespace App\Services\AuthProviders;

use App\Contracts\AuthProvider;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SpotifyAuthProvider implements AuthProvider
{
    public function redirect()
    {
        return Socialite::driver('spotify')
            ->setScopes(['user-read-email'])
            ->redirect();
    }

    public function callback()
    {
        $spotifyUser = Socialite::driver('spotify')->user();

        $user = User::updateOrCreate([
            'spotify_id' => $spotifyUser->id,
        ], [
            'name' => $spotifyUser->getName(),
            'email' => $spotifyUser->getEmail(),
            'avatar' => $spotifyUser->getAvatar(),
        ]);

        Auth::login($user);
        return redirect('/dashboard');
    }
}
