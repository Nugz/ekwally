<?php

namespace App\Api\Controllers;

use App\Data\Entities\User\UserEntity;
use App\Data\Repositories\User\UserRepositoryInterface;
use App\Data\Transformers\User\UserEntityTransformer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Faker\Generator;
use League\Fractal\Manager as FractalManager;
use League\Fractal\Resource\Collection as FractalCollection;

class UserController extends Controller {

	private $userRepository;

	/**
	 * UserController constructor.
	 * @param UserRepositoryInterface $userRepository
	 */
	public function __construct(
		UserRepositoryInterface $userRepository
	) {

		$this->userRepository = $userRepository;

	}

	/**
	 * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
	 */
	public function index(Request $request) {

		return response(
			$request->user()->with('profile')->toJson(),
			Response::HTTP_OK
		);

	}

	public function profile(Request $request) {

		return response(
			$request->user()->getProfile()->toJson(),
			Response::HTTP_OK
		);
	}

}
