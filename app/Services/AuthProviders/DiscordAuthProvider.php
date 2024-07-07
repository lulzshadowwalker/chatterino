<?php

namespace App\Services\AuthProviders;

use App\Contracts\AuthProvider;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class DiscordAuthProvider implements AuthProvider
{
    public function redirect()
    {
        return Socialite::driver('discord')->redirect();
    }

    public function callback()
    {
        $discordUser = Socialite::driver('discord')->user();

        $user = User::updateOrCreate([
            'discord_id' => $discordUser->id,
        ], [
            'name' => $discordUser->getName(),
            'email' => $discordUser->getEmail(),
            'avatar' => $discordUser->getAvatar(),
        ]);

        Auth::login($user);
        return redirect('/dashboard');
    }
}
