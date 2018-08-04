<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mockery\Exception;

class AccountController extends Controller {


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

		$user = \Auth::user();
		return view('company.account', compact('user'));
	}

}