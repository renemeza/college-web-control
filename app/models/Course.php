<?php

class Course extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

    public function career()
    {
        return $this->belongsTo('Career', 'career_id');
    }

    public function sections()
    {
        return $this->hasMany('CourseSection', 'course_id');
    }

    public function turns()
    {
        return $this->belongsToMany('Turn', 'course_sections', 'course_id', 'turn_id');
    }
}