<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
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

		\Auth::user()->authorizeType('company');

		$company = \Auth::user()->getCompany();
		return view('company.profile', compact('company'));
	}

	public function update(Request $request) {

		$data = $request->all();

		\Auth::user()->authorizeType('company');
		$company = \Auth::user()->getCompany();
		$user = \Auth::user();

		$company->setNrEmployees($data['nr_employees']);
		$company->setDescription($data['description']);

		try {
			$company->save();
		} catch (Exception $e) {
			\Debugbar::addThrowable($e);
		}



//		return view('company.profile', compact('company'));
		return redirect()->route('company.profile');

	}


}