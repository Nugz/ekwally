<?php

namespace App\Http\Controllers\Company;

use App\Data\Entities\User\UserEntity as User;
use App\Data\Entities\Company\CompanyEntity as Company;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller {

	/*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
	use RegistersUsers;

	/**
	 * Where to redirect users after registration.
	 *
	 * @var string
	 */
	protected $redirectTo = '/zakelijk/dashboard';

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {

		$this->middleware('guest');

	}

	/**
	 * Show the application registration form.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showRegistrationForm()
	{
		return view('company.register');
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
			'password' => 'required|string|min:6|confirmed',
			'kvk_nummer' => 'required|string|min:8|max:8|unique:App\Data\Entities\Company\CompanyEntity',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return \App\Data\Entities\User\UserEntity
	 */
	protected function create(array $data)
	{

		$company = new Company;
		$company->setName($data['company_name']);
		$company->setWebsiteUrl($data['website_url']);
		$company->setKvkNummer($data['kvk_nummer']);

		\EntityManager::persist($company);

		$user = new User;
		$user->setEmail($data['email']);
		$user->setName($data['name']);
		$user->setPassword(bcrypt($data['password']));
		$user->setType('company');
		$user->setCompanyEntity($company);

		\EntityManager::persist($user);
		\EntityManager::flush();

		return $user;
	}

}