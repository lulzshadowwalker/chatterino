<?php

namespace App\Services\AuthProviders;

use App\Contracts\AuthProvider;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GithubAuthProvider implements AuthProvider
{
    public function redirect()
    {
        return Socialite::driver('github')
            ->setScopes(['read:user', 'user:email'])
            ->redirect();
    }

    public function callback()
    {
        $githubUser = Socialite::driver('github')->user();

        $user = User::updateOrCreate([
            'github_id' => $githubUser->id,
        ], [
            'name' => $githubUser->getName(),
            'email' => $githubUser->getEmail(),
            'avatar' => $githubUser->getAvatar(),
        ]);

        Auth::login($user);
        return redirect('/dashboard');
    }
}
