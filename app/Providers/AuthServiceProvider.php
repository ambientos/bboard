<?php

namespace App\Providers;

class AuthServiceProvider extends AppServiceProvider
{
    protected $policies = [
        'App\Models\Bb' => 'App\Policies\BbPolicy',
    ];
}
