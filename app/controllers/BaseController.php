<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
	protected static function requestOriginalApi($uri, $method = 'GET', $params = array())
	{
		$request = Request::create($uri, $method, $params);
		$response = Route::dispatch($request)->getContent();
		return $response;
	}

	protected static function requestJSONApi($uri, $method = 'GET', $params = array(), $key = 'data')
	{
		$response = self::requestOriginalApi($uri, $method, $params);
		$data = json_decode($response, true);
		if(!is_null($data) && array_key_exists($key, $data)) {
			$data = $data[$key];
		}

		return $data;
	}
}