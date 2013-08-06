<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGradesDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grade_details', function(Blueprint $table) {
			$table->string('student_grade_id', 40);
			$table->string('grade_type', 80);
			$table->smallInteger('parcial')->unsigned()->default(1);
			$table->decimal('grade', 5, 2)->default(0);
			$table->timestamps();

			$table->unique(array('student_grade_id', 'grade_type', 'parcial'));

			$table->foreign('student_grade_id')
				->references('id')
				->on('student_grades')
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
		Schema::drop('grade_details');
	}

}
