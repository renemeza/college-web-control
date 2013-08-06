<?php

class TurnsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('turns')->delete();

		$turns = array(
            array(
                'id' => 'TM101',
                'name' => 'Matutina',
                'start_time' => (new DateTime('07:00:00'))->format('H:i:s'),
                'final_time' => (new DateTime('12:00:00'))->format('H:i:s')
            ),
            array(
                'id' => 'TM102',
                'name' => 'Tarde',
                'start_time' => (new DateTime('13:00:00'))->format('H:i:s'),
                'final_time' => (new DateTime('17:00:00'))->format('H:i:s')
            )
		);

		// Uncomment the below to run the seeder
		DB::table('turns')->insert($turns);
	}

}