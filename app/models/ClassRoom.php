<?php

class ClassRoom extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
        'id' => 'required',
        'floor' => 'numeric',
        'building' => 'numeric'
    );

    public function sections()
    {
        return $this->hasMany('CourseSection', 'classroom_id');
    }
}