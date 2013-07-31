<?php

class ClassesTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('classes')->delete();

        $classes = array(
            array(
                'code' => 'm101',
                'name' => 'Mathematics',
                'num_credits' => 6,
                'cancellation_date' => null,
                'description' => 'Mathematics 101, the base for the mathematics',
                'created_at' => (new DateTime())->format('Y-m-d H:i:s')
            ),
            array(
                'code' => 'f101',
                'name' => 'Physics',
                'num_credits' => 5,
                'cancellation_date' => null,
                'description' => 'physics 101, the base for the physics',
                'created_at' => (new DateTime())->format('Y-m-d H:i:s')
            ),
        );

        // Uncomment the below to run the seeder
        DB::table('classes')->insert($classes);
    }

}