<?php

namespace API\V1;
use BaseController;
use View;
use Response;
use Teacher;
use TeacherRepositoryInterface;
use Input;

class TeachersController extends BaseController {

    public function __construct(TeacherRepositoryInterface $teachers)
    {
        $this->teachers = $teachers;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return $this->teachers->findAll();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $teacher = $this->teachers->instance();
        return View::make('teachers._form', compact('teacher'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        return $this->teachers->store(Input::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $teacher = $this->teachers->findById($id);

        return Response::json(
            array(
                'error' => false,
                'data' => $teacher->toArray()
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
        $teacher = $this->teachers->findById($id);
        return View::make('teachers._form', array('teacher' => $teacher, 'exists' => true));
        // return "Edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        return $this->teachers->update($id, Input::all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->teachers->destroy($id);
        return Response::json(array(
            'error' => false
        ), 203);
    }

}