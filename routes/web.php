<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Company Register Routes...
$this->get('zakelijk/aanmelden', 'Company\RegisterController@showRegistrationForm')->name('company.register');
$this->post('zakelijk/aanmelden', 'Company\RegisterController@register');

// Company Dashboard
$this->get('zakelijk/dashboard', 'Company\DashboardController@index')->name('company.dashboard');

// User Dashboard
$this->get('particulier/dashboard', 'User\DashboardController@index')->name('user.dashboard');