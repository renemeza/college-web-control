<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class TeacherUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('teacher_users', function(Blueprint $table) {
			$table->string('teacher_id');
			$table->string('username');
			$table->timestamps();

			$table->unique(array('teacher_id', 'username'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('teacher_users');
	}

}
