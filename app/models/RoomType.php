<?php
	class RoomType extends Eloquent
	{
		protected $table='ref_room_types';

		protected $fillable = array('*');

		public function HotelRoom()
		{
			return $this->hasOne('HotelRooms');
		}
	}