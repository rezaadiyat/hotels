@extends('hotel.default')

@section('main')
<div class = "col-sm-3">
{{Form::open(array('url'=>'/availability'))}}
	<div class = "panel panel-primary">
		<div class = "panel-heading">
			<label>Booking Online</label>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label>Check In Date</label>	
	        	<input class = "form-control datepicker" type="text" id = "datepickerin" name = "checkin">
	        </div>
	        <div class="form-group">
	        	<label>Check Out Date</label>	
	        	<input class = "form-control datepicker" type="text" id = "datepickerout" name = "checkout">
	        </div>
	        <div class="form-group">
	        	<label>Adult</label>
	        	{{Form::selectRange('number', 1, 3, 1,['name'=>'adult', 'class'=>'form-control'])}}
	        </div>
	        <div class="form-group">
	        	<label>Children</label>
	        	{{Form::selectRange('number', 0, 2, 0, ['name'=>'child', 'class'=>'form-control'])}}
	        </div>
	   		{{ Form::submit('Check Availability', array('class' => 'btn btn-primary')) }}
    	</div>
    </div>
    {{Form::close()}}
</div>
<div class = "col-sm-9">
	<div class = "panel panel-primary">
		<div class = "panel-heading">
				<label>Available Room</label>
		</div>
		<table class="table table-hover">
		   	<tbody>
		       	@foreach ($availabilities as $availability)
		        	<tr>
		            	<td class = "col-sm-2"><div class = "thumbnail">{{ HTML::image('assets/img/AAAAAA.jpg')}}</div></td>
		            	<td class = "col-sm-9">Room Number : {{ $availability->roomnumber }}</br>Room Description : {{ $availability->description}}</td>
		            	<td class = "col-sm-3">
		            	<p>Price : $</p>
		            	<a href="{{url('room/' .$availability->roomnumber)}}" class = "btn btn-primary" role = "button">Book</a></td>
		            </tr>
		        @endforeach
		    </tbody>
		</table>
	</div>
</div>
@stop