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
	        	{{Form::selectRange('number', 1, 3, 1, ['name'=>'adult','class'=>'form-control'])}}
	        </div>
	        <div class="form-group">
	        	<label>Children</label>
	        	{{Form::selectRange('number', 0, 2, 0, ['name'=>'child','class'=>'form-control'])}}
	        </div>
	   		{{ Form::submit('Check Availability', array('class' => 'btn btn-primary')) }}
    	</div>
    </div>
    {{Form::close()}}
</div>
<div class = "col-sm-9">
	<div class="panel panel-primary">
		<div class="carousel slide" data-interval = "3000" data-ride="carousel" >
		   <!-- Wrapper for slides -->
		  <ol class="carousel-indicators">
	        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	        <li data-target="#myCarousel" data-slide-to="1"></li>
	        <li data-target="#myCarousel" data-slide-to="2"></li>
	      </ol>  
		  <div class="carousel-inner">
		    <div class="item active">
		      {{ HTML::image('assets/img/room1.jpg')}}
		    </div><!-- End Item -->

		     <div class="item">
		      {{ HTML::image('assets/img/room2.jpg')}}
		    </div><!-- End Item -->

		    <div class="item">
		      {{ HTML::image('assets/img/room3.jpg')}}
		    </div><!-- End Item -->
		  </div><!-- End Carousel Inner -->
		  <!-- Controls -->
		  	<a class="carousel-control left" href="#myCarousel" data-slide="prev">
	            <span class="glyphicon glyphicon-chevron-left"></span>
	        </a>
	        <a class="carousel-control right" href="#myCarousel" data-slide="next">
	        	<span class="glyphicon glyphicon-chevron-right"></span>
	    	</a>
		</div><!-- End Carousel -->
	</div>
</div>
@stop