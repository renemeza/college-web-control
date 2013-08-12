<?php

class TeachersTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	DB::table('teachers')->delete();

        $teachers = array(
            array(
                'id' => 'TC467',
                'first_name' => "Rene",
                'last_name' => "Meza",
                'address' => "Barrio Arriba",
                'birth_date' => (new DateTime('1987-08-19'))->format('Y-m-d H:i:s'),
                'photo' => null,
                'type' => 'PERMANENT'
            ),
            array(
                'id' => 'TC404',
                'first_name' => "Jose",
                'last_name' => "Meza",
                'address' => "Barrio Arriba",
                'birth_date' => (new DateTime('1992-11-01'))->format('Y-m-d H:i:s'),
                'photo' => null,
                'type' => 'TEMP'
            ),
            array(
                'id' => 'TC434',
                'first_name' => "Luis",
                'last_name' => "Pineda",
                'address' => "Barrio San Miguel",
                'birth_date' => (new DateTime('1987-10-01'))->format('Y-m-d H:i:s'),
                'photo' => null,
                'type' => 'PERMANENT'
            ),
            array(
                'id' => 'TC567',
                'first_name' => "Jose",
                'last_name' => "Argueta",
                'address' => "Barrio el estanque",
                'birth_date' => (new DateTime('1990-12-11'))->format('Y-m-d H:i:s'),
                'photo' => null,
                'type' => 'PERMANENT'
            ),
            array(
                'id' => 'TC5688',
                'first_name' => "Mario",
                'last_name' => "Sanchez",
                'address' => "Barrio el toronton",
                'birth_date' => (new DateTime('1985-07-13'))->format('Y-m-d H:i:s'),
                'photo' => null,
                'type' => 'PERMANENT'
            ),
            array(
                'id' => 'TC321',
                'first_name' => "Maria",
                'last_name' => "Argueta",
                'address' => "Barrio Arriba",
                'birth_date' => (new DateTime('1990-02-08'))->format('Y-m-d H:i:s'),
                'photo' => null,
                'type' => 'TEMP'
            )
        );

        // Uncomment the below to run the seeder
        DB::table('teachers')->insert($teachers);
    }

}