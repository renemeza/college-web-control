<?php

class TeachersTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	DB::table('teachers')->delete();

        $teachers = array(
            array(
                'first_name' => "Rene",
                'last_name' => "Meza",
                'address' => "Barrio Arriba",
                'birth_date' => (new DateTime('1987-08-19'))->format('Y-m-d H:i:s'),
                'hire_date' => (new DateTime())->format('Y-m-d H:i:s'),
                'dismissal_date' => (new DateTime())->format('Y-m-d H:i:s'),
                'photo' => null
            ),
             array(
                'first_name' => "Jose",
                'last_name' => "Meza",
                'address' => "Barrio Arriba",
                'birth_date' => (new DateTime('1992-11-01'))->format('Y-m-d H:i:s'),
                'hire_date' => (new DateTime())->format('Y-m-d H:i:s'),
                'dismissal_date' => (new DateTime())->format('Y-m-d H:i:s'),
                'photo' => null
            )
        );

        // Uncomment the below to run the seeder
        DB::table('teachers')->insert($teachers);
    }

}