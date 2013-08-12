<?php

class AppCareersController extends BaseController {

	public function __construct()
	{
		$this->meta_data = array(
			'active' => 'careers',
			'main_link' => URL::to('admin').'/'.'careers'
		);
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = self::requestJSONApi('/api/careers');
		return View::make('admin.layout', $this->meta_data)
			->nest('content', 'careers.index', array('data' => $data, 'main_link' => $this->meta_data['main_link']));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data = self::requestOriginalApi("/api/careers/create", "GET");
		return View::make('admin.layout', $this->meta_data)
			->with('content', $data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$student = self::requestJSONApi("/api/careers", "POST", Input::all());
		$alerts = array();
		// if(!is_null($teacher)) {
			$alerts['alert-type'] = "success";
			$alerts['title'] = "Exito";
			$alerts['message'] = "Registro agregado exitosamente";
		// }
		return Redirect::to("/admin/careers")->with('alerts', $alerts);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data = self::requestJSONApi("/api/careers/$id", "GET");
		return View::make('admin.layout', $this->meta_data)->nest('content', 'careers.show', compact('data'));
		// return "Show";
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data = self::requestOriginalApi("/api/careers/$id/edit", "GET");
		return View::make('admin.layout', $this->meta_data)
			->with(array('content' => $data));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$data = self::requestJSONApi("/api/careers/$id", 'PUT', Input::all());
		return Redirect::to("/admin/students");
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$career = Career::find($id);
		$career->delete();
		return Redirect::to('admin/careers');
	}

}