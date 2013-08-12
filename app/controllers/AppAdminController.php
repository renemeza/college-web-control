<?php

class AppAdminController extends BaseController
{
    // protected $layout = "layouts.application";

    public function showTeachers()
    {
        $data = self::requestApi("/api/teachers");
        return $this->renderView('teachers', $data);
    }

    public function showStudents()
    {
        $data = self::requestApi("/api/students");
        return $this->renderView('students', $data);
    }

    public function showCareers()
    {
        $data = self::requestApi("/api/careers");
        return $this->renderView('careers', $data);
    }

    public function deleteTeacher($id)
    {

    }

    protected function renderView($name, $data, $template = "index")
    {
        $main_link = URL::to('admin').'/'.$name;
        $content = View::make("$name.$template", array('data' => $data, 'main_link' => $main_link));
        return View::make('layouts.application')
            ->nest('content', 'admin.layout', array('content' => $content, 'active' => $name));
    }
}

?>