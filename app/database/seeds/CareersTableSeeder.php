<?php

class CareersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('careers')->delete();

		$careers = array(
            array(
                'id' => 'CC',
                'name' => 'Ciclo Comun'
            ),
             array(
                'id' => 'BB',
                'name' => 'Bachillerato'
            ),
              array(
                'id' => 'BT',
                'name' => 'Bachillerato, Tecnico'
            )
		);

		// Uncomment the below to run the seeder
		DB::table('careers')->insert($careers);
	}

}