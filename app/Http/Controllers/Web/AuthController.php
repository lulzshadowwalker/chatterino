<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Contracts\AuthProvider;
use Exception;
use Illuminate\Support\Facades\Log;

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
        try {
            return $this->provider->callback();
        } catch (Exception $e) {
            Log::error('Error during authentication callback', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return redirect()->route('login')->dangerBanner($e->getMessage());
        }
    }
}
