<?php

namespace Jonassiewertsen\CookieConsent;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $middlewareGroups = [
        'web' => [
            \Spatie\CookieConsent\CookieConsentMiddleware::class
        ]
    ];
    
    public function boot()
    {
        parent::boot();
    }
}
