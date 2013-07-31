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
	return View::make('hello');
});

Route::group(array('prefix' => 'api/v1'), function() {
    Route::resource('teachers', 'V1\TeachersController');
    Route::resource('courses', 'V1\CoursesController');
});

Route::resource('teachers', 'AppTeachersController');

// Route::get('api', function(){
//     $uri = 'https://github.com/api/v2/xml/user/show/nategood';
//     $res = HttpfulReq::get($uri)->send();
//     return "bien";
// });