<?php

namespace App\Api\Controllers\Information;

use App\Data\Repositories\Information\PositionRepositoryInterface;
use App\Data\Entities\Information\PositionEntity;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\Fractal\Manager as FractalManager;
use League\Fractal\Resource\Collection as FractalCollection;

class SectionController extends Controller {

	private $positionRepository;

	public function __construct(
		PositionRepositoryInterface $positionRepository
	) {
		$this->positionRepository = $positionRepository;
	}

	public function index() {

		$positions = $this->positionRepository->findAll();

		$resource = new FractalCollection($positions, PositionEntity::getTransformer());
		$fractal = new FractalManager();

		return response(
			$fractal->createData($resource)->toJson(),
			Response::HTTP_OK
		);

	}

}