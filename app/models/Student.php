<?php

class Student extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

    public function career()
    {
        return $this->belongsTo('Career');
    }

    public function records()
    {
        return $this
            ->belongsToMany('CourseSection', 'student_records', 'course_section_id', 'student_id')
            ->withPivot('time_period_id', 'record_date');
    }

    public function grades()
    {
        return $this
            ->hasMany('StudentGrade', 'student_id')
            ->withPivot('time_period_id');
    }

    public function subjects()
    {
        return $this
            ->belongsToMany('Subject', 'student_grades', 'subject_id', 'student_id')
            ->withPivot('time_period_id');
    }
}