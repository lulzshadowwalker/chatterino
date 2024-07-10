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

        $email = $discordUser->getEmail();
        $user = User::where('email', $email)->first();

        if ($user) {
            $user->update([
                'discord_id' => $discordUser->id,
            ]);
        } else {
            $user = User::updateOrCreate([
                'discord_id' => $discordUser->id,
            ], [
                'name' => $discordUser->getName(),
                'email' => $email,
                'avatar' => $discordUser->getAvatar(),
            ]);
        }

        Auth::login($user);
        return redirect('/dashboard');
    }
}
