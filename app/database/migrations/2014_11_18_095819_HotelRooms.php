<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HotelRooms extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create("hotelrooms", function($table)
	    {
	      $table->engine = "InnoDB";
	      $table->integer("roomnumber");
	      $table->primary("roomnumber");
	      $table->integer("roomtypes")->references('roomtypecode')->on('ref_room_types');
	      $table->integer("bookingid")->references('idbooking')->on('bookings');
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
		Schema::dropIfExists("hotelrooms");
	}

}
