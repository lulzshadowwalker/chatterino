<?php

namespace app\Contracts;

interface AuthProvider
{
    public function redirect();
    public function callback();
}
