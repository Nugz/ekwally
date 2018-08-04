<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    	switch(\Auth::user()->getType()) {

			case 'company':
				return redirect(route('company.dashboard'));
				break;

			case 'user':
				return redirect(route('user.dashboard'));
				break;

			default:
				return redirect(route('index'));
				break;
		}

    }
}
