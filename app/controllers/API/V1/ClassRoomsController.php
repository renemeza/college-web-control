<?php

namespace API\V1;
use BaseController;
use View;
use ClassRoomRepositoryInterface;

class ClassRoomsController extends BaseController {

	protected $class_rooms = null;

	public function __construct(ClassRoomRepositoryInterface $class_rooms)
	{
		$this->class_rooms = $class_rooms;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$classrooms = $this->class_rooms->findAll();
		return $classrooms;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$classroom = $this->class_rooms->findById($id);
		return $classroom;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function showSections($id, $section_id = null)
	{
		return $this->class_rooms->getSections($id, $section_id);
	}

	public function showSchedules($id)
	{
		return $this->class_rooms->getSchedules($id);
	}

}