<?php

class SchedulesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('schedules')->delete();

		$schedules = array(
            array(
                'id' => 'SC3434',
                'start_time' => (new DateTime('07:00'))->format('H:i'),
                'final_time' => (new DateTime('08:00'))->format('H:i'),
                'days' => 'LMXJ',
                'exam_day' => 'L'
            ),
            array(
                'id' => 'SC3435',
                'start_time' => (new DateTime('08:00'))->format('H:i'),
                'final_time' => (new DateTime('09:00'))->format('H:i'),
                'days' => 'LMXJV',
                'exam_day' => 'M'
            ),
            array(
                'id' => 'SC3634',
                'start_time' => (new DateTime('10:00'))->format('H:i'),
                'final_time' => (new DateTime('12:00'))->format('H:i'),
                'days' => 'LM',
                'exam_day' => 'M'
            )
		);

		// Uncomment the below to run the seeder
		DB::table('schedules')->insert($schedules);
	}

}