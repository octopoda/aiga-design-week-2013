<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


App::bind('DaysRepositoryInterface',  'EloquentDaysRepository');
App::bind('ActivityRepositoryInterface',  'EloquentActivityRepository');
App::bind('SpeakersRepositoryInterface',  'EloquentSpeakersRepository');
App::bind('SponsorsRepositoryInterface',  'EloquentSponsorsRepository');
App::bind('VenuesRepositoryInterface',  'EloquentVenuesRepository');

//Route Groups
Route::group(array('prefix'=>'api'), function () {
	Route::resource('days',  'aiga\DaysController');
	Route::resource('activity',  'aiga\ActivityController');
	Route::resource('talks',  'aiga\SpeakersController');
	Route::resource('sponsors',  'aiga\SponsorsController');
	Route::resource('venues',  'aiga\VenuesController');

	//Specific Routes
	Route::get('/getnav', 'aiga\DaysController@getDays');

});


Route::get('/', function () {
    return View::make('layouts.application');
});


//Login Routes
// Route::post('auth/login' array('before'=>'csrf_json', 'uses'=>'authController@login'));
// Route::get('/auth/logout', 'AuthController@logout');

