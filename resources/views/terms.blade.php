
<!DOCTYPE html>
	<!-- saved from url=(0046)http://www.afewtaps.com/index.php/welcome/blog -->
	<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="shortcut icon" href="http://www.afewtaps.com/images/Logo2.png" type="image/png">
	<!-- all the meta tags -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end of all the meta tags -->

	<title>afewtaps</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script src="https://use.fontawesome.com/5cd91b09e0.js"></script>

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/stylesheet.css') }}">



</head>
<body>
<div class="header_top">
	<img src="{!!asset('images/logon.png')!!}" class="img-responsive" style="margin: auto;">
</div>
<div class="container-fluid blog">
	@foreach ($terms as $term)
     <div>
     	{!! $term->terms !!}
     </div>        
@endforeach
</div>
<div class="row footer" style="margin-left: 0; margin-right: 0;">
		<div class="col-sm-6" style="text-align: left;">
			<h4>ABOUT US</h4>
			<p>A startup, aiming to create</p>
			<p>disruption in the food service technology space.</p>
			<p>We pledge to make food service <b>world class...</b></p>
		</div>
		<div class="col-sm-6" style="text-align: right;">
			<ul style="list-style: none;">
		        <li><a href="{!! url('/career'); !!}" style="text-decoration: none; color: #fff;">Career</a></li>
		        <li><a href="{!! url('/faq'); !!}" style="text-decoration: none; color: #fff;">FAQ</li>
		        <li><a href="{!! url('/blog'); !!}" style="text-decoration: none; color: #fff;">Blog</a></li>
		        <li><a href="{!! url('/feedback'); !!}" style="text-decoration: none; color: #fff;">Feedback</a></li>
		        <li><a href="{!! url('/privacy'); !!}" style="text-decoration: none; color: #fff;">Privacy</a></li>
                              <li><a href="{!! url('/terms'); !!}" style="text-decoration: none; color: #fff;">Terms</a></li>
		      </ul>
			<p>Copyright © 2017 Think Different Technologies (P) Ltd</p>
		</div>
	</div>	

</body>
</html>