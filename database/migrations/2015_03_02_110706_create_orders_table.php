<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('order_id');
			$table->smallInteger('customer_id')->references('customer_id')->on('customers');
			$table->smallInteger('pet_id')->references('pet_id')->on('pets');
			$table->float('order_total');
			$table->string('package_name');
			$table->string('package_type');
			$table->string('card_number');
			$table->string('card_cvv');
			$table->string('card_exp');
			$table->string('payment_status');
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
		Schema::drop('orders');
	}

}
