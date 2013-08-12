<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTimePeriodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('time_periods', function(Blueprint $table) {
			$table->string('id', 40);
			$table->string('duration_type')->nullable()->default('MONTHS');
			$table->smallInteger('duration')->default(0);
			$table->date('start_date')->default((new DateTime())->format('Y-m-d'));
			$table->integer('num_period')->default(0)->nullable();
			$table->timestamps();

			$table->primary('id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('time_periods');
	}

}
