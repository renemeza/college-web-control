<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('users')->delete();

		$users = array(
            array(
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('soyelpapi')
            ),
            array(
                'username' => 'user125',
                'email' => 'user125@gmail.com',
                'password' => Hash::make('quinchona')
            ),
            array(
                'username' => 'user204',
                'email' => 'user204@gmail.com',
                'password' => Hash::make('quinchonazorrona')
            ),
            array(
                'username' => 'user459',
                'email' => 'user459@gmail.com',
                'password' => Hash::make('quinchonamojona')
            )

		);

		// Uncomment the below to run the seeder
		DB::table('users')->insert($users);
	}

}