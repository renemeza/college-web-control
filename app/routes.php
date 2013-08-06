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

Route::resource('careers', 'CareersController');

Route::resource('courses', 'CoursesController');

Route::resource('turns', 'TurnsController');

Route::resource('class_rooms', 'Class_roomsController');

Route::resource('course_sections', 'Course_sectionsController');

Route::resource('subjects', 'SubjectsController');

Route::resource('time_periods', 'Time_periodsController');

Route::resource('students', 'StudentsController');

Route::resource('schedules', 'SchedulesController');

Route::resource('schedule_details', 'Schedule_detailsController');

Route::resource('student_grades', 'Student_gradesController');

Route::resource('grades_details', 'Grades_detailsController');

Route::resource('student_records', 'Student_recordsController');