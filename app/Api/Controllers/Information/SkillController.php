<?php

namespace App\Api\Controllers\Information;

use App\Data\Repositories\Information\SkillRepositoryInterface;
use App\Data\Entities\Information\SkillEntity;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\Fractal\Manager as FractalManager;
use League\Fractal\Resource\Collection as FractalCollection;

class SkillController extends Controller {

	private $skillRepository;

	public function __construct(
		SkillRepositoryInterface $skillRepository
	) {
		$this->skillRepository = $skillRepository;
	}

	public function index() {

		$skills = $this->skillRepository->findAll();

		$resource = new FractalCollection($skills, SkillEntity::getTransformer());
		$fractal = new FractalManager();

		return response(
			$fractal->createData($resource)->toJson(),
			Response::HTTP_OK
		);

	}

	public function store(Request $request) {

		$skill = new SkillEntity;
		$skill->setName($request->name);

		try {
			$skill->save();
		} catch(\Exception $e) {
			return response(['error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
		}

		return response($skill->toJson(), Response::HTTP_OK);

	}

}