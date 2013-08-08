<?php

class Career extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

    public function courses()
    {
        return $this->hasMany('Course');
    }

    public function students()
    {
        return $this->hasMany('Student');
    }
}