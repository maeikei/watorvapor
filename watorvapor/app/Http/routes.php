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

/*
Route::get('/about', function () {
    return view('about');
});
Route::get('/about/{locale}', function ($locale) {
	App::setLocale($locale);
    return view('about');
});

Route::get('/{locale}', function ($locale) {
	App::setLocale($locale);
    return view('welcome');
});


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/about/{locale?}', 'AboutController@index');
Route::get('/{locale?}', 'WelcomeController@index');
