<?php

class SectionTeachersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('section_teachers')->delete();

		$sectionteachers = array(
            array(
                'teacher_id' => 'TC467',
                'course_section_id' => '1CCN1M',
                'time_period_id' => 'P2012'
            ),
             array(
                'teacher_id' => 'TC567',
                'course_section_id' => '1CCN2M',
                'time_period_id' => 'P2012'
            )
		);

		// Uncomment the below to run the seeder
		DB::table('section_teachers')->insert($sectionteachers);
	}

}