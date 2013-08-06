<?php

class ScheduleDetailsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('schedule_details')->delete();

		$schedule_details = array(
            array(
                'schedule_id' => 'SC3434',
                'course_section_id' => '1CCN1M',
                'teacher_id' => 'TC467',
                'time_period_id' => 'P2012',
                'subject_id' => 'MATH101'
            ),
            array(
                'schedule_id' => 'SC3435',
                'course_section_id' => '1CCN2M',
                'teacher_id' => 'TC467',
                'time_period_id' => 'P2012',
                'subject_id' => 'PHI101'
            ),
             array(
                'schedule_id' => 'SC3435',
                'course_section_id' => '1CCN2M',
                'teacher_id' => 'TC467',
                'time_period_id' => 'P2013',
                'subject_id' => 'PHI101'
            )
		);

		// Uncomment the below to run the seeder
		DB::table('schedule_details')->insert($schedule_details);
	}

}