<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVaccinationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vaccinations', function(Blueprint $table)
		{
			$table->increments('vaccine_id');
			$table->string('vaccine_name');
			$table->float('vaccine_price');
			$table->smallInteger('plan_id');
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
		Schema::drop('vaccinations');
	}

}
