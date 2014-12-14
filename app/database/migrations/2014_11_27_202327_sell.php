<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sell extends Migration {

		
 	public static $timestamps = true;
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
	Schema::create("car_sold", function($table)
        {
                $table->increments('id');
                $table->string('first_name');
                $table->string('email');
                $table->string('password');
                $table->string('password_confirmation');
                $table->string('car_name');
                $table->string('car_model');
                $table->string('car_make');
                $table->string('car_color');
                $table->string('car_machine');
                $table->string('car_transmission');
                $table->string('car_wheels');
                $table->string('car_condition');
                $table->string('car_mileage');
                $table->string('car_or_cr');
                $table->string('car_negotiable');
                $table->string('car_phone');
                $table->string('car_mobile');
                $table->string('car_accesories');
                $table->string('car_price');
                $table->integer('created_at');
		$table->integer('updated_at');
                $table->integer('time');
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}