<?php

namespace App\Api\Controllers\User;

use App\Data\Repositories\Information\PositionRepositoryInterface;
use App\Data\Entities\Information\PositionEntity;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\Fractal\Manager as FractalManager;
use League\Fractal\Resource\Collection as FractalCollection;

class ProfileController extends Controller {

	private $positionRepository;

	public function __construct(
		PositionRepositoryInterface $positionRepository
	) {
		$this->positionRepository = $positionRepository;
	}

}