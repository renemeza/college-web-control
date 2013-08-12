<?php

class TimePeriodsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('time_periods')->delete();

		$time_periods = array(
            array(
                'id' => 'P2012',
                'duration' => 12,
                'num_period' => 1
            ),
             array(
                'id' => 'P2013',
                'duration' => 12,
                'num_period' => 1
            )
		);

		// Uncomment the below to run the seeder
		DB::table('time_periods')->insert($time_periods);
	}

}