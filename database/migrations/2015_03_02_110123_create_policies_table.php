<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliciesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('policies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->smallInteger('customer_id')->references('customer_id')->on('customers');
			$table->smallInteger('order_id')->references('order_id')->on('orders');
			$table->string('policy_number');
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
		Schema::drop('policies');
	}

}
