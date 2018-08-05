<?php

namespace App\Api\Controllers\Information;

use App\Data\Repositories\Information\PositionRepositoryInterface;
use App\Data\Entities\Information\PositionEntity;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\Fractal\Manager as FractalManager;
use League\Fractal\Resource\Collection as FractalCollection;

class PositionController extends Controller {

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

	public function store(Request $request) {

		$position = new PositionEntity;
		$position->setName($request->name);

		try {
			$position->save();
		} catch(\Exception $e) {
			return response(['error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
		}

		return response($position->toJson(), Response::HTTP_OK);

	}

}