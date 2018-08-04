<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Data\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;
use App\Data\Entities\User\UserEntity;

class AdminController extends Controller {

	private $userRepository;

	public function __construct(
		UserRepositoryInterface $userRepository
	) {
		$this->userRepository = $userRepository;
	}

	public function index() {

		\Auth::user()->authorizeType('company');

		return view('company.admin.index');

	}

	public function users() {

		\Auth::user()->authorizeType('company');

		$company = \Auth::user()->getCompany();
		$users = $this->userRepository->findByCompany($company);

		return view('company.admin.users', compact('users'));

	}

	public function newUser() {

		\Auth::user()->authorizeType('company');

		$user = new UserEntity;

		return view('company.admin.edituser', compact('user'));

	}

	public function editUser($id) {

		\Auth::user()->authorizeType('company');

		$user = $this->userRepository->find($id);

		return view('company.admin.edituser', compact('user'));

	}

	public function saveUser(Request $request) {

		\Auth::user()->authorizeType('company');

		$data = $request->all();

	}

}