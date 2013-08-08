<?php

namespace API\V1;
use BaseController;
use View;
use Response;
use Teacher;
use TeacherRepositoryInterface;

class TeachersController extends BaseController {

    public function __construct(TeacherRepositoryInterface $teachers)
    {

    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return Response::json(
            array(
                'error' => false,
                'data' => $teachers->toArray()
            ),
            200);
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
        $teacher = Teacher::where('id', $id)->get();

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

}