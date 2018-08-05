<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Data\Repositories\Information\SkillRepository;
use App\Data\Repositories\Information\SkillRepositoryInterface;
use App\Data\Entities\Information\SkillEntity;

use App\Data\Repositories\Information\SectionRepository;
use App\Data\Repositories\Information\SectionRepositoryInterface;
use App\Data\Entities\Information\SectionEntity;

use App\Data\Repositories\Information\PositionRepository;
use App\Data\Repositories\Information\PositionRepositoryInterface;
use App\Data\Entities\Information\PositionEntity;

class InformationServiceProvider extends ServiceProvider
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

    	// SkillRepository
		$this->app->bind(SkillRepositoryInterface::class, function($app) {
			return new SkillRepository(
				$app['em'],
				$app['em']->getClassMetaData(SkillEntity::class)
			);
		});

		// SectionRepository
		$this->app->bind(SectionRepositoryInterface::class, function($app) {
			return new SectionRepository(
				$app['em'],
				$app['em']->getClassMetaData(SectionEntity::class)
			);
		});

		// positionRepository
		$this->app->bind(PositionRepositoryInterface::class, function($app) {
			return new PositionRepository(
				$app['em'],
				$app['em']->getClassMetaData(PositionEntity::class)
			);
		});

    }
}
