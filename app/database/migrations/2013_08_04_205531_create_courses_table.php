<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table) {
			$table->string('id', 40);
			$table->smallInteger('num_course')->default(1);
			$table->string('career_id', 40);
			$table->timestamps();

			$table->primary('id');
			$table->unique(array('num_course', 'career_id'));

			$table->foreign('career_id')
				->references('id')
				->on('careers')
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
		Schema::drop('courses');
	}

}
