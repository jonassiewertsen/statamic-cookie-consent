<?php

namespace Jonassiewertsen\CookieConsent;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    public function boot()
    {
        parent::boot();

        $this->bootMiddleware();
    }

    /**
     * Will add the cookie consent partial automatically to all views
     */
    protected function bootMiddleware()
    {
        $router = $this->app['router'];
        $router->pushMiddlewareToGroup(
            'web',
            \Spatie\CookieConsent\CookieConsentMiddleware::class
        );
    }
}