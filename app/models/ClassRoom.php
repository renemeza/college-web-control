<?php

class ClassRoom extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

    public function sections()
    {
        return $this->hasMany('CourseSection', 'classroom_id');
    }
}