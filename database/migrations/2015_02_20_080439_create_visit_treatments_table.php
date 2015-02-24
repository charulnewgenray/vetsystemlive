<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitTreatmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('visit_treatments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->smallInteger('visit_id')->references('visit_id')->on('visits');
			$table->smallInteger('treatment_id')->references('treatment_id')->on('treatments');
			$table->string('label');
			$table->float('price');
			$table->tinyInteger('covered');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('visit_treatments');
	}

}
