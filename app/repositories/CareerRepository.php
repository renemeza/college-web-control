<?php

use BotDemon\Data\Repository as EloquentRepository;

class CareerRepository extends EloquentRepository implements CareerRepositoryInterface
{
    public function __construct()
    {
        parent::__construct('Career');
    }

    public function getCourses($id, $course_id = null)
    {
        $model = $this->validateModel();
        $courses = null;
        if(!is_null($course_id)) {
            $courses = $model::find($id)->courses()->where('id', $course_id);
        }
        else {
            $courses = $model::find($id)->courses;
        }
        return $courses;
    }

    public function findWithCourses($id, $course_id = null)
    {
        $model = $this->validateModel();
        $career = null;
        if(!is_null($course_id)) {
            $career = $model::with(array('courses' => function($query) use ($course_id) {
                $query->where('id', $course_id);
            }))->where('id', $id)->first();
        }
        else {
            $career = $model::with('courses')->where('id', $id)->first();
        }
        return $career;
    }
}
?>