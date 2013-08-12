<?php

class CoursesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('courses')->delete();

		$courses = array(
            array(
                'id' => '1CC',
                'num_course' => 1,
                'career_id' => 'CC'
            ),
            array(
                'id' => '2CC',
                'num_course' => 2,
                'career_id' => 'CC'
            ),
            array(
                'id' => '1BB',
                'num_course' => 1,
                'career_id' => 'BB'
            ),
            array(
                'id' => '1BT',
                'num_course' => 1,
                'career_id' => 'BT'
            )
		);

		// Uncomment the below to run the seeder
		DB::table('courses')->insert($courses);
	}

}