<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bookings extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create("bookings", function($table)
	    {
	      $table->engine = "InnoDB";
	      $table->increments("idbooking");
	      $table->dateTime('date_from');
	      $table->dateTime('date_to');
	    
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
		Schema::dropIfExists("bookings");
	}

}
