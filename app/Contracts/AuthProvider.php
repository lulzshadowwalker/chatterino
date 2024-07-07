<?php

namespace app\Contracts;

interface AuthProvider
{
    // TODO: handle email conflict
    public function redirect();
    public function callback();
}
