<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Eloquent::unguard();

		//$this->call('BookingsSeeder');
		$this->call('HotelRoomsSeeder');
		$this->call('RoomTypesSeeder');
	}

}
