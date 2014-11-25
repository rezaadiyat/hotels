<?php

class HotelRoom extends Eloquent{

	protected $table = 'hotelrooms';
	protected $fillable = array('roomnumber');
	public function HotelRoomBooking()
	{
		return $this->hasOne('Booking');
	}

	public function availability($checkin, $checkout)
	{
		$availabelroom = DB::table('hotelrooms')->join('ref_room_types','hotelrooms.roomtypes','=','ref_room_types.roomtypecode')
											->join('bookings', function($join) use($checkin,$checkout){
												$join->on('hotelrooms.bookingid','=','bookings.idbooking')
													 ->where('bookings.date_from','>',$checkin)
													 ->where('bookings.date_from','>',$checkout)
													 ->orWhere('bookings.date_to','<',$checkin)
													 ->where('bookings.date_to','<',$checkout)
												->orWhere('hotelrooms.bookingid','=',0);
											})
											->select('hotelrooms.roomnumber','ref_room_types.description')
											->distinct()
											->get();
		return $availabelroom;
	}
	/*
	public function HotelRoomType()
	{
		retrun $this->hasOne('RoomTypes');
	}*/

	public function selectRoom($number)
	{
		$selectedroom = DB::table('hotelrooms')->join('ref_room_types','hotelrooms.roomtypes','=','ref_room_types.roomtypecode')
												->where('roomnumber',$number)->first();
		return $selectedroom;
	}
}