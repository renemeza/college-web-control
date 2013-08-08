<?php

class CourseSubjectsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('course_subjects')->delete();

		$course_subjects = array(
            array(
                'course_id' => 'CC',
                'subject_id' =>'MATH101'
            ),
            array(
                'course_id' => 'CC',
                'subject_id' => 'PHI101'
            ),
            array(
                'course_id' => 'CC',
                'subject_id' =>'INF201'
            ),
            array(
                'course_id' => 'BB',
                'subject_id' => 'INF201'
            ),
            array(
                'course_id' => 'BB',
                'subject_id' => 'MATH101'
            ),
            array(
                'course_id' => 'BB',
                'subject_id' =>'PHI101'
            ),
            array(
                'course_id' => 'BB',
                'subject_id' => 'INF220'
            ),
		);

		// Uncomment the below to run the seeder
		DB::table('course_subjects')->insert($course_subjects);
	}

}