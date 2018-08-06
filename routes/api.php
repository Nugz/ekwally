<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', 'UserController@index')->middleware('auth:api');
Route::get('/user/profile', 'UserController@profile')->middleware('auth:api');

Route::resource('/users', 'UserController');

Route::resource('/information/skills', 'Information\SkillController')->only(['index','store']);
Route::resource('/information/sections', 'Information\SectionController')->only(['index','store']);
Route::resource('/information/positions', 'Information\PositionController')->only(['index','store']);

Route::resource('users/{id}/profile', 'User\ProfileController')->only(['show','update']);
