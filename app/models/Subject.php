<?php

class Subject extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

    public function courses()
    {
        return $this->belongsToMany('Course', 'course_subjects', 'course_id', 'subject_id');
    }

    public function students()
    {
        return $this
            ->belongsToMany('Student', 'student_grades', 'student_id', 'subject_id')
            ->withPivot('time_period_id');
    }

    public function sections()
    {
        return $this
            ->belongsToMany('CourseSection', 'schedule_details', 'course_section_id', 'subject_id')
            ->withPivot('time_period_id');
    }

    public function schedules()
    {
        return $this
            ->belongsToMany('Schedule', 'schedule_details', 'schedule_id', 'subject_id')
            ->withPivot('time_period_id');
    }

    public function teachers()
    {
        return $this
            ->belongsToMany('Teacher', 'schedule_details', 'teacher_id', 'subject_id')
            ->withPivot('time_period_id');
    }
}