<?php
	class Booking extends Eloquent
	{
		protected $table='bookings';

		protected $fillable = array('date_from', 'date_to');

		public function HotelRoom()
		{
			return $this->hasOne('HotelRooms');
		}
	}