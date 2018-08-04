<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Data\Repositories\User\UserRepositoryInterface;
use App\Data\Entities\User\UserEntity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:App\Data\Entities\User\UserEntity',
			'password' => 'string|min:6|confirmed',
		]);
	}

	public function saveUser(Request $request) {

		\Auth::user()->authorizeType('company');

		$this->validator($request->all())->validate();
		$data = $request->all();
		$company = \Auth::user()->getCompany();

		if(isset($data['id'])) {
			$user = $this->userRepository->find($id);
		} else {
			$user = new UserEntity;
		}

		$user->setName($data['name']);
		$user->setEmail($data['email']);
		$user->setType('company');
		$user->setCompanyEntity($company);

		if(isset($data['password'])) {
			$user->setPassword(bcrypt($data['password']));
		}

		$user->save();

		return redirect(route('company.admin.users.edit', ['id' => $user->getId()]))->with('status', 'User opgeslagen');

	}

	public function deleteUser($id) {

		\Auth::user()->authorizeType('company');

		/* App\Data\Entities\User\UserEntity */
		$user = $this->userRepository->find($id);

		$user->delete();

		return redirect()->back()->with('status', 'User verwijderd');

	}

}