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
	protected static function requestApi($uri, $method = 'GET', $key = 'data')
	{
		$request = Request::create($uri, $method);
		$response = Route::dispatch($request)->getContent();
		$data = json_decode($response, true);
		if(!is_null($data) && array_key_exists($key, $data)) {
			$data = $data[$key];
		}

		return $data;
	}
}