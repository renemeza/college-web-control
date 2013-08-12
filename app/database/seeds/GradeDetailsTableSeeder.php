<?php

class GradeDetailsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('grade_details')->delete();

		$grades_details = array(
            array(
                'student_grade_id' => 'GR102',
                'grade_type' => 'EXAM',
                'parcial' => 1,
                'grade' => 45.56
            ),
            array(
                'student_grade_id' => 'GR102',
                'grade_type' => 'ACUM',
                'parcial' => 1,
                'grade' => 34.06
            ),
            array(
                'student_grade_id' => 'GR202',
                'grade_type' => 'EXAM',
                'parcial' => 1,
                'grade' => 70.0
            )
		);

		// Uncomment the below to run the seeder
		DB::table('grade_details')->insert($grades_details);
	}

}