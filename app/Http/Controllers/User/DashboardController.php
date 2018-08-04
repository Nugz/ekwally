<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller {


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

		return view('user.dashboard');
	}


}