<?php

class StudentRecordsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('student_records')->delete();

		$student_records = array(
            array(
                'id' => 'MQ102',
                'student_id' => 'AL345',
                'course_section_id' => '1CCN1M',
                'time_period_id' => 'P2012',
            ),
            array(
                'id' => 'MQ103',
                'student_id' => 'AL645',
                'course_section_id' => '1CCN1M',
                'time_period_id' => 'P2012',
            ),
            array(
                'id' => 'MQ105',
                'student_id' => 'AL845',
                'course_section_id' => '2CCN1M',
                'time_period_id' => 'P2012',
            )
		);

		// Uncomment the below to run the seeder
		DB::table('student_records')->insert($student_records);
	}

}