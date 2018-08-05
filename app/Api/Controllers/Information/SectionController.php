<?php

namespace App\Api\Controllers\Information;

use App\Data\Repositories\Information\SectionRepositoryInterface;
use App\Data\Entities\Information\SectionEntity;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\Fractal\Manager as FractalManager;
use League\Fractal\Resource\Collection as FractalCollection;

class SectionController extends Controller {

	private $sectionRepository;

	public function __construct(
		SectionRepositoryInterface $sectionRepository
	) {
		$this->sectionRepository = $sectionRepository;
	}

	public function index() {

		$sections = $this->sectionRepository->findAll();

		$resource = new FractalCollection($sections, SectionEntity::getTransformer());
		$fractal = new FractalManager();

		return response(
			$fractal->createData($resource)->toJson(),
			Response::HTTP_OK
		);

	}

}