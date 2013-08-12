<?php

namespace API\V1;
use BaseController;
use View;
use Response;
use StudentRepositoryInterface;
use Input;

class StudentsController extends BaseController {

	public function __construct(StudentRepositoryInterface $students)
	{
		$this->students = $students;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->students->findAll();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$student = $this->students->instance();
        return View::make('students._form', compact('student'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        return $this->students->store(Input::all());

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$student = $this->students->findById($id);

        return Response::json(
            array(
                'error' => false,
                'data' => $student->toArray()
            ), 200);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$student = $this->students->findById($id);
        return View::make('students._form', array('student' => $student, 'exists' => true));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        return $this->students->update($id, Input::all());

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->students->destroy($id);
        return Response::json(array(
            'error' => false
        ), 203);
	}

}