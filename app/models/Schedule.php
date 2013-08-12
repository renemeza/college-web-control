<?php

class Schedule extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

    public function sections()
    {
        return $this->belongsToMany('CourseSection', 'schedules_details', 'course_section_id', 'schedule_id');
    }

    public function teachers()
    {
        return $this->belongsToMany('Teacher', 'schedules_details', 'teacher_id', 'schedule_id');
    }

    public function subjects()
    {
        return $this->belongsToMany('Subject', 'schedules_details', 'subject_id', 'schedule_id');
    }
}