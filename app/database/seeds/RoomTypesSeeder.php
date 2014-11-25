<?php
class RoomTypesSeeder extends Seeder{
	public function run(){

		DB::table('ref_room_types')->insert(array(
			array('roomtypecode'=>101, 'description'=>'Room Types 101'),
			));
	}
}