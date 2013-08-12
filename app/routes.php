<?php

App::bind('ClassRoomRepositoryInterface', 'ClassRoomRepository');
App::bind('CareerRepositoryInterface', 'CareerRepository');
App::bind('CourseRepositoryInterface', 'CourseRepository');
App::bind('CourseSectionRepositoryInterface', 'CourseSectionRepository');
App::bind('ScheduleRepositoryInterface', 'ScheduleRepository');
App::bind('StudentGradeRepositoryInterface', 'StudentGradeRepository');
App::bind('StudentRecordRepositoryInterface', 'StudentRecordRepository');
App::bind('StudentRepositoryInterface', 'StudentRepository');
App::bind('SubjectRepositoryInterface', 'SubjectRepository');
App::bind('TeacherRepositoryInterface', 'TeacherRepository');
App::bind('TimePeriodRepositoryInterface', 'TimePeriodRepository');
App::bind('TurnRepositoryInterface', 'TurnRepository');


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

/*
 * ------------------------------------------------------------------------
 * Home Route
 * ------------------------------------------------------------------------
 */
use Httpful\Request as HttReq;

Route::get('req', function() {
    $uri = '192.168.33.10/api/teachers';
    $req = HttReq::get($uri)->send();
    return $req;
});

Route::get('/', function()
{
	return View::make('layouts.landing')->nest('content', 'main');
});

/*
 * -------------------------------------------------------------------------
 * Web Services APIs
 * -------------------------------------------------------------------------
 */
Route::group(array('prefix' => 'api'), function() {

    Route::resource('teachers', 'API\V1\TeachersController');
    Route::group(array('prefix' => 'teachers'), function() {
    });

    Route::resource('careers', 'API\V1\CareersController');
    Route::group(array('prefix' => 'careers'), function() {
        Route::get('{id}/query/courses/{course_id?}', 'API\V1\CareersController@showCourses');
        Route::get('{id}/{child}/{student_id?}', 'API\V1\CareersController@showChild');
    });

    Route::resource('courses', 'API\V1\CoursesController');
    Route::group(array('prefix' => 'courses'), function() {
    });

    Route::resource('turns', 'API\V1\TurnsController');
    Route::group(array('prefix' => 'turn'), function() {
    });

    Route::resource('classrooms', 'API\V1\ClassRoomsController');
    Route::group(array('prefix' => 'classrooms'), function() {
        Route::get('{id}/query/sections/{section_id?}', 'API\V1\ClassRoomsController@showSections');
        Route::get('{id}/query/schedules', 'API\V1\ClassRoomsController@showSchedules');
    });

    Route::resource('coursesections', 'API\V1\CourseSectionsController');
    Route::group(array('prefix' => 'coursesections'), function() {
    });

    Route::resource('subjects', 'API\V1\SubjectsController');
    Route::group(array('prefix' => 'subjects'), function() {
    });

    Route::resource('timeperiods', 'API\V1\TimePeriodsController');
    Route::group(array('prefix' => 'timeperiods'), function() {
    });

    Route::resource('students', 'API\V1\StudentsController');
    Route::group(array('prefix' => 'students'), function() {
    });

    Route::resource('schedules', 'API\V1\SchedulesController');
    Route::group(array('prefix' => 'schedules'), function() {
    });

    Route::resource('studentgrades', 'API\V1\StudentGradesController');
    Route::group(array('prefix' => 'studentgrades'), function() {
    });

    Route::resource('studentrecords', 'API\V1\StudentRecordsController');
    Route::group(array('prefix' => 'studentrecords'), function() {
    });

    Route::resource('users', 'API\V1\UsersController');

    // Route::resource('schedule_details', 'API\V1\ScheduleDetailsController');
    // Route::resource('grades_details', 'API\V1\GradeDetailsController');
});

/*
 * -------------------------------------------------------------------------------------
 * Application Routes
 * -------------------------------------------------------------------------------------
 */
Route::get('login', 'LoginController@show');
Route::post('login', 'LoginController@login');
Route::get('logout', 'LoginController@logout');


Route::group(array('prefix' => 'app', 'before' => 'auth'), function() {
    Route::get('/', function() {
        return View::make('layouts.application', array('content' => ''));
    });
    Route::resource('teachers', 'AppTeachersController');

});

Route::group(array('prefix' => 'admin', 'before' => 'auth'), function() {
    Route::get('/', 'AppTeachersController@index');

    Route::resource('teachers', 'AppTeachersController');
    Route::resource('students', 'AppStudentsController');
    Route::resource('careers', 'AppCareersController');

});

// Route::get('api', function(){
//     $uri = 'https://github.com/api/v2/xml/user/show/nategood';
//     $res = HttpfulReq::get($uri)->send();
//     return "bien";
// });

Route::get('test', array('before' => 'api.type:json'), function() {
    $sess_token = Session::token();
    $form_token = Form::token();
    return Response::make("Sess token: $sess_token <br>Form token: $form_token", 200);
});

