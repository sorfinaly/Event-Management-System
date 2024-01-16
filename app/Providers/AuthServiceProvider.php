<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Auth\SessionGuard;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }

    protected function createSessionDriver()
    {
        return tap($this->buildSessionGuard(), function ($guard) {
            $guard->setCookieJar($this->app['cookie']);
            $guard->setDispatcher($this->app['events']);
            $guard->setRequest($this->app->refresh('request', $guard, 'setRequest'));
        });
    }

    protected function buildSessionGuard()
    {
        return new SessionGuard(
            'web',
            $this->app['auth']->createUserProvider($config['provider']),
            $this->app['session.store'],
            $this->app['request'],
            $config['provider'],
            $this->app['config']['session.lifetime']
        );
    }
}
