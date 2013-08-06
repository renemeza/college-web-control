<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentGradesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_grades', function(Blueprint $table) {
			$table->string('id', 40);
			$table->string('student_id', 40);
			$table->string('subject_id', 40);
			$table->string('time_period_id', 40);
			$table->timestamps();

			$table->unique(array('student_id', 'subject_id', 'time_period_id'));
			$table->primary('id');
			$table->foreign('student_id')
				->references('id')
				->on('students')
				->onDelete('CASCADE')
				->onUpdate('CASCADE');
			$table->foreign('subject_id')
				->references('id')
				->on('subjects')
				->onDelete('CASCADE')
				->onUpdate('CASCADE');
			$table->foreign('time_period_id')
				->references('id')
				->on('time_periods')
				->onDelete('CASCADE')
				->onUpdate('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('student_grades');
	}

}
