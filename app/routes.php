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
use Httpful\Request as HttpfulReq;
use Httpful\Response as HttpfulRes;
Route::get('/', function()
{
	// return View::make('hello');
    return "Hola";
});

Route::get('test', function()
{
    // return View::make('hello');
    return "Hello";
});

Route::group(array('prefix' => 'api/v1'), function() {
    Route::resource('teachers', 'V1\TeachersController');
    Route::resource('classes', 'V1\ClassesController');
});

Route::get('teachers', function() {
    $request = Request::create('/api/v1/teachers', 'GET');
    $response = Route::dispatch($request)->getContent();
    $name = json_decode($response, true);
    return $name['data'];
});

