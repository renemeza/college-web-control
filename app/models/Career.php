<?php

class Career extends Eloquent {
	protected $guarded = array();

    protected $fillable = array(
        'id', 'name'
    );

	public static $rules = array(
        'id' => 'required',
        'name' => 'required'
    );

    public function courses()
    {
        return $this->hasMany('Course');
    }

    public function students()
    {
        return $this->hasMany('Student');
    }
}