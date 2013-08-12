<?php

/*
|--------------------------------------------------------------------------
| Register The Laravel Class Loader
|--------------------------------------------------------------------------
|
| In addition to using Composer, you may use the Laravel class loader to
| load your controllers and models. This is useful for keeping all of
| your classes in the "global" namespace without Composer updating.
|
*/


ClassLoader::addDirectories(array(

	app_path().'/commands',
	app_path().'/controllers',
	app_path().'/models',
	app_path().'/database/seeds',
    app_path().'/lib'

));

/*
|--------------------------------------------------------------------------
| Application Error Logger
|--------------------------------------------------------------------------
|
| Here we will configure the error logger setup for the application which
| is built on top of the wonderful Monolog library. By default we will
| build a rotating log file setup which creates a new file each day.
|
*/

$logFile = 'log-'.php_sapi_name().'.txt';

Log::useDailyFiles(storage_path().'/logs/'.$logFile);

/*
|--------------------------------------------------------------------------
| Application Error Handler
|--------------------------------------------------------------------------
|
| Here you may handle any errors that occur in your application, including
| logging them or displaying custom views for specific errors. You may
| even register several error handlers to handle different types of
| exceptions. If nothing is returned, the default error view is
| shown, which includes a detailed stack trace during debug.
|
*/

App::error(function(Exception $exception, $code)
{
	Log::error($exception);
});

App::error(function(Symfony\Component\HttpKernel\Exception\HttpException $e, $code) {
    $headers = $e->getHeaders();

    switch ($code) {
        case 401:
            $default_message = 'Invalid API Key';
            $headers['WWW-Authenticate'] = 'Basic realm="CRM REST API"';
            break;
        case 403:
            $default_message = 'Insufficient privileges to perform this action';
            break;
        case 404:
            $default_message = 'The requested resource was not found';
            break;
        default:
            $default_message = 'An error was encountered';
            break;
    }

    return Response::json(array(
        'error' => true,
        'error_code' => $code,
        'message' => $e->getMessage() ?: $default_message
    ), $code, $headers);
});

App::error(function(BotDemon\PermissionException $e, $code) {
    return Response::json(array(
        'error' => true,
        'message' => $e->getMessage()),
    $e->getCode());
});

App::error(function(BotDemon\ValidationException $e, $code) {
    return Response::json(array(
        'error' => true,
        'message' => $e->getMessages()),
    $code);
});

App::error(function(BotDemon\NotFoundException $e, $code) {
    return Response::json(array(
        'error' => true,
        'message' => $e->getMessage()),
    $code);
});
/*
|--------------------------------------------------------------------------
| Maintenance Mode Handler
|--------------------------------------------------------------------------
|
| The "down" Artisan command gives you the ability to put an application
| into maintenance mode. Here, you will define what is displayed back
| to the user if maintenace mode is in effect for this application.
|
*/

App::down(function()
{
	return Response::make("Be right back!", 503);
});

/*
|--------------------------------------------------------------------------
| Require The Filters File
|--------------------------------------------------------------------------
|
| Next we will load the filters file for the application. This gives us
| a nice separate location to store our route and application filter
| definitions instead of putting them all in the main routes file.
|
*/

require app_path().'/filters.php';