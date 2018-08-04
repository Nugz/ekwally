<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Data\Repositories\User\UserRepository;
use App\Data\Repositories\User\UserRepositoryInterface;
use App\Data\Entities\User\UserEntity;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    	// UserRepository
		$this->app->bind(UserRepositoryInterface::class, function($app) {
			return new UserRepository(
				$app['em'],
				$app['em']->getClassMetaData(UserEntity::class)
			);
		});

    }
}
