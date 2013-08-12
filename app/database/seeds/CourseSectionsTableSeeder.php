<?php

class CourseSectionsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('course_sections')->delete();

		$course_sections = array(
            array(
                'id' => '1CCN1M',
                'num_section' => 1,
                'course_id' => '1CC',
                'turn_id' => 'TM101',
                'classroom_id' => 'CR101'
            ),
            array(
                'id' => '1CCN2M',
                'num_section' => 2,
                'course_id' => '1CC',
                'turn_id' => 'TM101',
                'classroom_id' => 'CR112'
            ),
            array(
                'id' => '2CCN1M',
                'num_section' => 1,
                'course_id' => '2CC',
                'turn_id' => 'TM102',
                'classroom_id' => 'CR112'
            )
		);

		// Uncomment the below to run the seeder
		DB::table('course_sections')->insert($course_sections);
	}

}