<?php

class StudentGradesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('student_grades')->delete();

		$student_grades = array(
            array(
                'id' => 'GR102',
                'student_id' => 'AL345',
                'subject_id' => 'MATH101',
                'time_period_id' => 'P2012'
            ),
            array(
                'id' => 'GR202',
                'student_id' => 'AL345',
                'subject_id' => 'MATH101',
                'time_period_id' => 'P2013'
            ),
            array(
                'id' => 'GR145',
                'student_id' => 'AL845',
                'subject_id' => 'SOC101',
                'time_period_id' => 'P2012'
            )
		);

		// Uncomment the below to run the seeder
		DB::table('student_grades')->insert($student_grades);
	}

}