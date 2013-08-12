<?php

class AppTeachersController extends \BaseController {

	protected $layout = 'layouts.application';

	public function __construct()
	{
		$this->meta_data = array(
			'active' => 'teachers',
			'main_link' => URL::to('admin').'/'.'teachers'
		);

		View::share('alerts', null);
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = self::requestJSONApi('/api/teachers');
		return View::make('admin.layout', $this->meta_data)
			->nest('content', 'teachers.index',
				array(
					'data' => $data,
					'main_link' => $this->meta_data['main_link']));
	    // return View::make('teachers.index', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data = self::requestOriginalApi("/api/teachers/create", "GET");
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
		$teacher = self::requestJSONApi("/api/teachers", "POST", Input::all());
		$alerts = array();
		// if(!is_null($teacher)) {
			$alerts['alert-type'] = "success";
			$alerts['title'] = "Exito";
			$alerts['message'] = "Registro agregado exitosamente";
		// }
		return Redirect::to("/admin/teachers")->with('alerts', $alerts);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data = self::requestJSONApi("/api/teachers/$id");
		return View::make('admin.layout', $this->meta_data)->nest('content', 'teachers.show', compact('data'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data = self::requestOriginalApi("/api/teachers/$id/edit", "GET");
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
		$data = self::requestJSONApi("/api/teachers/$id", 'PUT', Input::all());
		return Redirect::to("/admin/teachers");
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// self::requestOriginalApi('/api/teachers', "DELETE");
		// return Redirect::to('admin/teachers');
		$teacher = Teacher::find($id);
		$teacher->delete();
		return Redirect::to('admin/teachers');
	}

}