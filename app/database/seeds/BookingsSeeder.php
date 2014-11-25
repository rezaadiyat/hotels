<?php
class BookingsSeeder extends Seeder{
	public function run(){

		$datenow = new DateTime;
		$clone = clone $datenow;
		$clone->modify('+1 day');

		DB::table('bookings')->insert(array(
			array('date_from'=>$datenow,'date_to'=>$clone),
			));
	}
}