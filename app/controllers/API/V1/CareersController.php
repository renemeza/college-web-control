<?php

namespace API\V1;
use BaseController;
use View;
use CareerRepositoryInterface;
use NotFoundException;
use Response;
use Input;
class CareersController extends BaseController {

	protected $careers = null;

	public function __construct(CareerRepositoryInterface $careers)
	{
		$this->careers = $careers;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->careers->findAll();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$career = $this->careers->instance();
		return View::make('careers._form', compact('career'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return $this->careers->store(Input::all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$career = $this->careers->findById($id);
		return Response::json(
            array(
                'error' => false,
                'data' => $career->toArray()
            ), 200);
	}

	public function showCourses($id, $course_id = null)
	{
		return $this->careers->getCourses($id, $course_id);
	}

	public function showChild($id, $child, $child_id = null)
	{
		$career = null;
		if(!method_exists('Career', $child)) {
			throw new NotFoundException("$child Not Found");
		}
		switch ($child) {
			case 'courses':
				$career = $this->careers->findWithCourses($id, $child_id);
				break;
			default:
				# code...
				break;
		}
		return $career;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$career = $this->careers->findById($id);
		return View::make('careers._form', array('career' => $career, 'exists' => true));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return $this->careers->update($id, Input::all());
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->careers->destroy($id);
		return Response::make(array('error' => false), 203);
	}

}