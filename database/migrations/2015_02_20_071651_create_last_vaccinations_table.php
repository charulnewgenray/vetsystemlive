<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLastVaccinationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('last_vaccinations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->smallInteger('vaccine_id')->references('vaccine_id')->on('vaccinations');
			$table->smallInteger('event_id')->references('event_id')->on('events');
			$table->string('vaccine_name');
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
		Schema::drop('last_vaccinations');
	}

}
