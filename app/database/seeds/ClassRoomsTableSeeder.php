<?php

class ClassRoomsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('class_rooms')->delete();

		$class_rooms = array(
            array(
                'id' => 'CR101',
                'floor' => 1,
                'building' => 1,
            ),
            array(
                'id' => 'CR112',
                'floor' => 3,
                'building' => 1
            ),
            array(
                'id' => 'CR201',
                'floor' => 1,
                'building' => 2
            )
		);

		// Uncomment the below to run the seeder
		DB::table('class_rooms')->insert($class_rooms);
	}

}