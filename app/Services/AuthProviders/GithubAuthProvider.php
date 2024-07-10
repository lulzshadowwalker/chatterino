<?php

namespace App\Services\AuthProviders;

use App\Contracts\AuthProvider;
use App\Models\Chat;
use App\Models\Message;
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

        $email = $githubUser->getEmail();
        $user = User::where('email', $email)->first();

        if ($user) {
            $user->update([
                'github_id' => $githubUser->id,
            ]);
        } else {
            $user = User::updateOrCreate([
                'github_id' => $githubUser->id,
            ], [
                'name' => $githubUser->getName(),
                'email' => $email,
                'avatar' => $githubUser->getAvatar(),
            ]);
        }

        Chat::factory(8)
            ->has(
                Message::factory(10)
                    ->state(function (array $attributes, Chat $chat) use ($user) {
                        return [
                            'user_id' => 1,
                            'chat_id' => $chat->id,
                        ];
                    })
            )
            ->create()
            ->each(function (Chat $chat) use ($user) {
                $chat->participants()->attach([$user->id, 1]);
            });

        Auth::login($user);
        return redirect('/dashboard');
    }
}
