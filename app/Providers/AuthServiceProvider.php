<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
//        $this->registerPolicies();

//		if (\Config::get('doctrine')) {
//			$em = $this->app->make('Doctrine\ORM\EntityManager');
//			$driver = \Doctrine\ORM\Mapping\Driver\AnnotationDriver::create(__DIR__);
//			$driverChain = $em->getConfiguration()->getMetadataDriverImpl();
//			$driverChain->addDriver($driver, 'Barnetik\DoctrineAuth');
//		}
//		Auth::extend('doctrine', function($app) {
//			$provider = new DoctrineUserProvider($app->make('Doctrine\ORM\EntityManager'), config('auth.model'));
//			return new \Illuminate\Auth\Guard($provider, $app['session.store']);
//		});

        //
    }
}
