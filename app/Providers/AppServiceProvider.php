<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(\App\Contracts\AuthProvider::class, function ($app) {
            $provider = request()->route('provider');
            switch ($provider) {
                case 'github':
                    return $app->make(\App\Services\AuthProviders\GithubAuthProvider::class);
                case 'discord':
                    return $app->make(\App\Services\AuthProviders\DiscordAuthProvider::class);
                default:
                    throw new \Exception('Invalid provider');
            }

            throw new \Exception('Invalid provider');
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Event::listen(function (\SocialiteProviders\Manager\SocialiteWasCalled $event) {
            $event->extendSocialite('github', \SocialiteProviders\GitHub\Provider::class);
        });

        Event::listen(function (\SocialiteProviders\Manager\SocialiteWasCalled $event) {
            $event->extendSocialite('discord', \SocialiteProviders\Discord\Provider::class);
        });
    }
}
