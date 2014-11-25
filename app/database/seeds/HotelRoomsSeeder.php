<?php
class HotelRoomsSeeder extends Seeder{
	public function run(){

		for($i = 2001; $i <=2010; $i++)
		{
			DB::table('hotelrooms')->insert(array(
			array('roomnumber'=>$i, 'roomtypes'=>101),
			));
		}
	}
}