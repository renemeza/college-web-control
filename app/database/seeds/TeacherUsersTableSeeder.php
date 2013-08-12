<?php

class TeacherUsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('teacher_users')->delete();

		$teacher_users = array(

		);

		// Uncomment the below to run the seeder
		DB::table('teacher_users')->insert($teacher_users);
	}

}