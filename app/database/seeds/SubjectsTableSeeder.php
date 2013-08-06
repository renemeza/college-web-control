<?php

class SubjectsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('subjects')->delete();

		$subjects = array(
            array(
                'id' => 'MATH101',
                'name' => 'Matematica',
                'num_credits' => 6,
                'description' => null
            ),
            array(
                'id' => 'PHI101',
                'name' => 'Fisica',
                'num_credits' => 4,
                'description' => 'Fisica Elemental'
            ),
            array(
                'id' => 'SOC101',
                'name' => 'Sociologia',
                'num_credits' => 3,
                'description' => null
            ),
            array(
                'id' => 'PRG301',
                'name' => 'Programacion',
                'num_credits' => 3,
                'description' => null
            ),
            array(
                'id' => 'INF201',
                'name' => 'Informatica',
                'num_credits' => 3,
                'description' => null
            ),
            array(
                'id' => 'INF220',
                'name' => 'Redes I',
                'num_credits' => 3,
                'description' => null
            )

		);

		// Uncomment the below to run the seeder
		DB::table('subjects')->insert($subjects);
	}

}