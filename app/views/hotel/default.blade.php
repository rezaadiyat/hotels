<!doctype html>
<html lang="en">
	<head>
		<meta charset = "utf-8">
		<title> Hotel </title>
		@include('hotel.asset')
	</head>
	<body>
		<div class = "container">
			<div class = "navbar navber-fixed-top">
				<div class = "navbar-inner">
					<div class="container">
						@include('hotel.navigation')
					</div>
				</div>
			</div>
			<hr>
			@yield('main')
		</div>
		<div id="footer">
			<div class = "navbar navbar-inverse navber-fixed-bottom">
	      		<div class = "navbar-inner">
	     			<div class="container">
	      				@include('hotel.footer')
	      			</div>
	      		</div>
	    	 </div>
	    </div>
	</body>
</html>