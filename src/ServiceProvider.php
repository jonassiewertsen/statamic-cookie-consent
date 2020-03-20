<?php

namespace Jonassiewertsen\CookieConsent;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $routes = [
//        'cp' => __DIR__ . '/../routes/cp.php',
    ];

    protected $widgets = [
//        \Jonassiewertsen\OhDear\Widgets\OhDear::class,
    ];

    public function boot()
    {
        parent::boot();

        $this->bootMiddleware();

//        $this->loadViewsFrom(__DIR__ . '/../resources/views/', 'oh-dear');
//        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'oh-dear');
//        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'oh-dear');
//
//        if ($this->app->runningInConsole()) {
//            $this->publishes([
//                __DIR__.'/../resources/lang' => resource_path('lang/vendor/jonassiewertsen/ohDear/'),
//            ], 'Statamic Oh Dear lang file');
//
//            $this->publishes([
//                __DIR__ . '/../config/config.php' => config_path('statamic/oh-dear.php'),
//            ], 'Statamic Oh Dear config file');
//        }
    }

    protected function bootMiddleware()
    {
        $router = $this->app['router'];
        $router->pushMiddlewareToGroup(
            'web',
            \Spatie\CookieConsent\CookieConsentMiddleware::class
        );
    }
}