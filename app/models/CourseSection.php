<?php

class CourseSection extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

    public function schedules()
    {
        return $this->belongsToMany('Schedule', 'schedule_details', 'course_section_id', 'schedule_id');
    }

    public function classRoom()
    {
        return $this->belongsTo('ClassRoom', 'classroom_id');
    }

    public function course()
    {
        return $this->belongsTo('Course', 'course_id');
    }

    public function turn()
    {
        return $this->belongsTo('Turn', 'turn_id');
    }

    public function teachers()
    {
        return $this
            ->belongsToMany('Teacher', 'section_teachers', 'course_section_id', 'teacher_id')
            ->withPivot('time_period_id');
    }

    public function students()
    {
        return $this
            ->belongsToMany('Student', 'student_records', 'course_section_id', 'student_id')
            ->withPivot('time_period_id');
    }
}