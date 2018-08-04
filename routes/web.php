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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('particulier/profiel/edit/{vue_capture?}', function () {
    return view('user.profile');
})->where('vue_capture', '[\/\w\.-]*');

// Homepage
$this->get('/', 'IndexController@index')->name('index');

// Company Register Routes...
$this->get('zakelijk/aanmelden', 'Company\RegisterController@showRegistrationForm')->name('company.register');
$this->post('zakelijk/aanmelden', 'Company\RegisterController@register');

// Company Dashboard
$this->get('zakelijk/dashboard', 'Company\DashboardController@index')->name('company.dashboard');
$this->get('zakelijk/profiel', 'Company\ProfileController@index')->name('company.profile');
$this->post('zakelijk/profiel/update', 'Company\ProfileController@update')->name('company.profile.update');
$this->get('zakelijk/account', 'Company\AccountController@index')->name('company.account');

// User Register Routes...
$this->get('particulier/aanmelden', 'Auth\RegisterController@showRegistrationForm')->name('user.register');
$this->post('particulier/aanmelden', 'Auth\RegisterController@register');

// User Dashboard
$this->get('particulier/dashboard', 'User\DashboardController@index')->name('user.dashboard');
$this->get('particulier/profiel', 'User\ProfileController@index')->name('user.profile');

// Company Admin
$this->get('zakelijk/admin', 'Company\AdminController@index')->name('company.admin');
$this->get('zakelijk/admin/users', 'Company\AdminController@users')->name('company.admin.users');
$this->get('zakelijk/admin/users/new', 'Company\AdminController@newUser')->name('company.admin.users.new');
$this->get('zakelijk/admin/users/edit/{id}', 'Company\AdminController@editUser')->name('company.admin.users.edit');
$this->get('zakelijk/admin/users/delete/{id}', 'Company\AdminController@deleteUser')->name('company.admin.users.delete');
$this->post('zakelijk/admin/users/save', 'Company\AdminController@saveUser')->name('company.admin.users.save');