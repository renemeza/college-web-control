<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CourseSubjects extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_subjects', function(Blueprint $table) {
			$table->string('course_id', 40);
			$table->string('subject_id', 40);
			$table->timestamps();

			$table->unique(array('course_id', 'subject_id'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('course_subjects');
	}

}
