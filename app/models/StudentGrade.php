<?php

class StudentGrade extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

    public function student()
    {
        return $this->belongsTo('Student', 'student_id');
    }

    public function grades()
    {
        return $this->hasMany('GradeDetails', 'student_grade_id');
    }

    public function period()
    {
        return $this->belongsTo('TimePeriod', 'time_period_id');
    }

    public function subject()
    {
        return $this->belongsTo('Subject', 'subject_id');
    }
}