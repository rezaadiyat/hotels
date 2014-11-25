@extends('hotel.default')

@section('main')
	<p id ="registered">If you have previously registered with us, please log in now.</p>
	<p id="require" style="">* Required Field </p>
	<div class="col-sm-3">
		<div class = "panel panel-primary">
		<div class = "panel-heading">
			<label>Your Room</label>
		</div>
		<div class="panel-body">
			<div class = "thumbnail">{{ HTML::image('assets/img/AAAAAA.jpg')}}</div>
    		<p>Room Number 		: {{$noroom->roomnumber}}</p>
    		<p>Room Type   		: {{$noroom->roomtypes}}</p>
    		<p>Room Description : {{$noroom->description}}</p>
    	</div>
    </div>
    </div>
	<form id = "" class="col-sm-8" method="POST" action="{{ URL::to('/guestdetail') }}" novalidate>
		<div id="formguest" class="panel-group">
		    <div class="panel panel-default">
		        <div class="panel-heading">
		            <h4 class="panel-title">
		                <a data-toggle="collapse" data-parent="#formguest">GUEST DETAILS</a>
		            </h4>
		        </div>
		        <div id="guestdetails" class="collapse in">
		            <div class="panel-body">
						<div class="form-group @if ($errors->has('firstname')) has-error @endif">
							<label for="firstname"> First Name</label>
							<div class="required-field-block">
								<input type="text" id="firstname" class="form-control" name="firstname" placeholder="Your First Name">
								<div class="required-icon">
                					<div class="text">*</div>
            					</div>
            					@if ($errors->has('firstname')) <p class="help-block">{{ $errors->first('firstname') }}</p> @endif
							</div>
						</div>

						<div class="form-group @if ($errors->has('lastname')) has-error @endif">
							<label for="lastname"> Last Name</label>
							<div class="required-field-block">
								<input type="text" id="lastname" class="form-control" name="lastname" placeholder="Your Last Name">
								<div class="required-icon">
                					<div class="text">*</div>
            					</div>
            					@if ($errors->has('lastname')) <p class="help-block">{{ $errors->first('lastname') }}</p> @endif
							</div>
						</div>

						<div class="form-group">
							<label for="street">Street</label>
							<input type="text" id="street" class="form-control" name="street" placeholder="Your Street Address">
						</div>

						<div class="form-group">
							<label for="zipcode">Zipcode</label>
							<input type="text" id="zipcode" class="form-control" name="zipcode" placeholder="Your Zipcode">
						</div>

						<div class="form-group @if ($errors->has('city')) has-error @endif">
							<label for="city">City</label>
							<div class="required-field-block">
								<input type="text" id="city" class="form-control" name="city" placeholder="Your City">
								<div class="required-icon">
                					<div class="text">*</div>
            					</div>
            					@if ($errors->has('city')) <p class="help-block">{{ $errors->first('city') }}</p> @endif
							</div>
						</div>

						<div class="form-group @if ($errors->has('country')) has-error @endif">
							<label for="country">Country</label>
							<div class="required-field-block">
								<input type="text" id="country" class="form-control" name="country" placeholder="Your Country">
								<div class="required-icon">
                					<div class="text">*</div>
            					</div>
            					@if ($errors->has('country')) <p class="help-block">{{ $errors->first('country') }}</p> @endif
							</div>
						</div>
						<div class="form-group @if ($errors->has('telephone')) has-error @endif">
							<label for="telephone">Telephone</label>
							<div class="required-field-block">
								<input type="text" id="telephone" class="form-control" name="telephone" placeholder="Your Telephone Number">
								<div class="required-icon">
                					<div class="text">*</div>
            					</div>
            					@if ($errors->has('telephone')) <p class="help-block">{{ $errors->first('telephone') }}</p> @endif
							</div>
						</div>
						<div class="form-group">
							<label for="fax">Fax</label>
							<input type="text" id="fax" class="form-control" name="fax" placeholder="Your Fax Number">
						</div>
						<div class="form-group">
							<label for="company">Company</label>
							<input type="text" id="company" class="form-control" name="company" placeholder="Your Company">
						</div>
						<div class="form-group @if ($errors->has('email')) has-error @endif">
							<label for="email">Email</label>
							<div class="required-field-block">
								<input type="email" id="email" class="form-control" name="email" placeholder="Your Email Address">
								<div class="required-icon">
                					<div class="text">*</div>
            					</div>
            					@if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
							</div>
						</div>
						<div id="guestacoount" class="panel-group">
							<div class="panel panel-default">
			        			<div class="panel-heading">
			          				<h4 class="panel-title">
			                			<a data-toggle="collapse" data-parent="#guestaccount" href="#account">SETUP YOUR USER ACCOUNT</a>
			            			</h4>
			        			</div>
			        			<div id="account" class="panel-collapse collapse">
			            			<div class="panel-body">
										<div class="form-group">
											<label for="email-acc"> Email</label>
											<input type="email" id="email-acc" class="form-control" name="email-acc" placeholder="Your Email Address">
										</div>
										<div class="form-group">
											<label for="pass-acc"> Password</label>
											<input type="password" id="pass-acc" class="form-control" name="pass-acc" placeholder="Your Password">
										</div>
			            			</div>
			        			</div>
			        		</div>
			        	</div>
		    		</div>
		    	</div>
		    </div>
		</div>
		<div id="carddetail" class="panel-group">
		    <div class="panel panel-default">
		        <div class="panel-heading">
		            <h4 class="panel-title">
		                <a data-toggle="collapse" data-parent="#carddetail" href="#card">CARD DETAILS</a>
		            </h4>
		        </div>
		        <div id="card" class="panel-collapse collapse">
		            <div class="panel-body">
		                <div class="form-group @if ($errors->has('credit')) has-error @endif">
							<label for="cardtype">Credit Card Type</label>
							<div class="required-field-block">
								<select class = "form-control" name="credit" id="creditcard">
								    <option value="visa" selected>Visa</option>
								    <option value="jcbcard">JCB Card</option>
								    <option value="dinersclub">Diners Club</option>
								    <option value="mastercard">Master Card</option>
								    <option value="american">American Express</option>
								</select>
								<div class="required-icon">
                					<div class="text">*</div>
            					</div>
            					@if ($errors->has('credit')) <p class="help-block">{{ $errors->first('credit') }}</p> @endif
							</div>
            			</div>
            			<div class="form-group @if ($errors->has('cardnumber')) has-error @endif">
							<label for="cardnumber"> Credit Card Number</label>
							<div class="required-field-block">
								<input type="text" id="cardnumber" class="form-control" name="cardnumber" placeholder="Your Credit Card Number">
								<div class="required-icon">
                					<div class="text">*</div>
            					</div>
            					@if ($errors->has('cardnumber')) <p class="help-block">{{ $errors->first('cardnumber') }}</p> @endif
							</div>
						</div>
						<div class="form-group ">
							<label for="expiry" class = "col-sm-12"> Expiry Date </label>
							<div class = "col-sm-6">
								<div class="required-field-block @if ($errors->has('month-ex')) has-error @endif">
									<select class = "form-control" name="month-ex" id="month-ex">
									    <option value="" selected>Month</option>
									    <option value="1">January</option>
									    <option value="2">February</option>
									    <option value="3">March</option>
									    <option value="4">April</option>
									    <option value="5">May</option>
									    <option value="6">June</option>
									    <option value="7">July</option>
									    <option value="8">August</option>
									    <option value="9">September</option>
									    <option value="10">October</option>
									    <option value="11">November</option>
									    <option value="12">December</option>
									</select>
									<div class="required-icon">
                						<div class="text">*</div>
            						</div>
            						@if ($errors->has('month-ex')) <p class="help-block">{{ $errors->first('month-ex') }}</p> @endif
								</div>
							</div>
							<div class = "col-sm-6">
								<div class="required-field-block @if ($errors->has('year-ex')) has-error @endif">
									<select class = "form-control" name="year-ex" id="year-ex">
									    <option value="" selected>Year</option>
									    <option value="2014">2014</option>
									    <option value="2015">2015</option>
									    <option value="2016">2016</option>
									    <option value="2017">2017</option>
									</select>
									<div class="required-icon">
                						<div class="text">*</div>
            						</div>
            						@if ($errors->has('year-ex')) <p class="help-block">{{ $errors->first('year-ex') }}</p> @endif
								</div>
							</div>
						</div>
						<div class="form-group @if ($errors->has('holdername')) has-error @endif">
							<label for="holdername"> Name of Card Holder</label>
							<div class="required-field-block">
								<input type="text" id="holdername" class="form-control" name="holdername" placeholder="Card Holder Name">
								<div class="required-icon">
                					<div class="text">*</div>
            					</div>
            					@if ($errors->has('holdername')) <p class="help-block">{{ $errors->first('holdername') }}</p> @endif
							</div>
						</div>
		            </div>
		        </div>
		    </div>
		</div>
		<div id="roompreferences" class="panel-group">
		    <div class="panel panel-default">
		        <div class="panel-heading">
		            <h4 class="panel-title">
		                <a data-toggle="collapse" data-parent="#roompreferences" href="#preferences">ROOM PREFERENCES</a>
		            </h4>
		        </div>
		        <div id="preferences" class="panel-collapse collapse">
		            <div class="panel-body">
		                <div class="form-group">
							<label for="comment"> Comment</label>
							<input type="text" id="comment" class="form-control" name="comment">
						</div>
		            </div>
		        </div>
		    </div>
		</div>
		<div class = "panel panel-default">
			<div class="checkbox @if ($errors->has('condition')) has-error @endif">
			    <label>
			      <input type="checkbox" name = "condition" style="left = 25px;"> I have understood and agree to the Booking Conditions and Privacy Policy
			    </label>
			    @if ($errors->has('condition')) <p class="help-block">{{ $errors->first('condition') }}</p> @endif
			</div>
		</div>
		<input type="hidden" name = "numberroom" value="{{$noroom->roomnumber}}">
		<button id = "confirm" type="submit" class="btn btn-primary btn-lg">Confirm</button>
	</form>
@stop