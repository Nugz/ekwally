<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Data\Entities\User\ProfileEntity;
use Illuminate\Http\Request;
use Mockery\Exception;

class ProfileController extends Controller {


	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {

		$this->middleware('auth');

	}

	/**
	 * Show the dashboard
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{

		\Auth::user()->authorizeType('user');

		$user = \Auth::user();
		$profile = $user->getProfile();

		if(!$profile) {

			$profile = new ProfileEntity;
			\EntityManager::persist($profile);

			$user->setProfile($profile);
			\EntityManager::persist($user);
			\EntityManager::flush();

		}

		return view('user.profile', compact('user'));
	}

}