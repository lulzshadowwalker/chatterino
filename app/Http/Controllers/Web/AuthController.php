<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Contracts\AuthProvider;

class AuthController extends Controller
{
    private AuthProvider $provider;

    public function __construct(AuthProvider $provider)
    {
        $this->provider = $provider;
    }

    public function redirect()
    {
        return $this->provider->redirect();
    }

    public function callback()
    {
        return $this->provider->callback();
    }
}
