<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoomTypes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create("ref_room_types", function($table)
	    {
	      $table->engine = "InnoDB";
	      $table->integer('roomtypecode');
	      $table->primary('roomtypecode');
	      $table->string('description')->nullable();  
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
		Schema::dropIfExists("ref_room_types");
	}

}
