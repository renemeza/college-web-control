<?php

class StudentsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('students')->delete();

		$students = array(
            array(
                'id' => 'AL345',
                'first_name' => 'Marlon',
                'last_name' => 'York',
                'career_id' => 'CC'
            ),
            array(
                'id' => 'AL645',
                'first_name' => 'Tom',
                'last_name' => 'Missaki',
                'career_id' => 'CC'
            ),
            array(
                'id' => 'AL845',
                'first_name' => 'Zack',
                'last_name' => 'Ponce',
                'career_id' => 'BB'
            )

		);

		// Uncomment the below to run the seeder
		DB::table('students')->insert($students);
	}

}