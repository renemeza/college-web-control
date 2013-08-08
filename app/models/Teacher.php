<?php

class Teacher extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

    public function teachSections()
    {
        return $this
            ->belongsToMany('CourseSection', 'schedule_details', 'course_section_id', 'teacher_id')
            ->withPivot('time_period_id');
    }

    public function subjects()
    {
        return $this
            ->belongsToMany('Subject', 'schedule_details', 'subject_id', 'teacher_id')
            ->withPivot('time_period_id', 'course_section_id');
    }

    public function schedules()
    {
        return $this
            ->belongsToMany('Schedule', 'schedule_details', 'schedule_id', 'teacher_id')
            ->withPivot('time_period_id', 'subject_id', 'course_section_id');
    }

    public function manageSections()
    {
        return $this
            ->belongsToMany('CourseSection', 'section_teachers', 'course_section_id', 'teacher_id')
            ->withPivot('time_period_id');
    }
}