<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('TeachersTableSeeder');
		$this->call('CareersTableSeeder');
		$this->call('CoursesTableSeeder');
		$this->call('TurnsTableSeeder');
		$this->call('ClassRoomsTableSeeder');
		$this->call('SubjectsTableSeeder');
		$this->call('TimePeriodsTableSeeder');
		$this->call('CourseSectionsTableSeeder');

		$this->call('SectionTeachersTableSeeder');
		$this->call('StudentsTableSeeder');
		$this->call('SchedulesTableSeeder');
		$this->call('ScheduleDetailsTableSeeder');
		$this->call('StudentGradesTableSeeder');
		$this->call('GradeDetailsTableSeeder');
		$this->call('StudentRecordsTableSeeder');
		$this->call('Course_subjectsTableSeeder');
	}

}