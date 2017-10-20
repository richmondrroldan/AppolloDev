<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'articleController@main');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/redirect','SocialAuthController@googleRedirect');

Route::get('/callback','SocialAuthController@googleCallback');

Route::resource('rWorkshop', 'rWorkshopController');

Route::resource('profile', 'profileController');

Route::resource('articleC', 'articleController');

Route::resource('mentors', 'mentorsController');

Route::resource('skills', 'skillsController');

Route::resource('events', 'eventsController');

Route::resource('rWorkshop', 'rWorkshopController');

Route::resource('aWorkshop', 'adminWorkshopController');

Route::resource('results', 'resultsController');

Route::get('artCreate', 'articleController@create');

Route::get('/wReq', 'rWorkshopController@woReq');

Route::get('upEvents', 'eventsController@showAll');

Route::get('findMentors', 'trainingController@findMentors');

Route::get('mDet/{mentor}', 'mentorsController@mDet');

Route::get ('mSpec/{skill}', 'mentorsController@mSpec');

Route::get('reqWorkshop', 'trainingController@reqWorkshop');

Route::get('training', 'articleController@training');

Route::get('detail', 'mentorsController@detail');

Route::get('/{article}', 'articleController@article');
