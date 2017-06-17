<!DOCTYPE html>
<html>
<head>
	<title>Establishment - Login</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://use.fontawesome.com/5cd91b09e0.js"></script>

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/stylesheet.css') }}">
    <script src="{{ URL::asset('js/script.js') }}"></script>
</head>
<body class="gray-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div class="ibox-content" style="min-height:300px">
             <p><img src="http://www.afewtaps.com/establishment/../uploads/logo.png" alt="afewtaps" width="45" /></p>
             <p>Login to see it in action.</p>
			 			              <form action="http://www.afewtaps.com/establishment/index.php/auth/index" class="m-t" role="form" method="post" accept-charset="utf-8">
                <!--<div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" required="" name="email" autocomplete="off" />
                </div>-->
				
				<div class="form-group">
					<div class="input-group">
							  <span class="input-group-addon"><i class="fa fa-user" style="font-size: 19px;"></i></span>
							  <input type="email" class="form-control" placeholder="Email" required="" name="email" autocomplete="off" />
					</div>
				</div>
				
				
                <!--<div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" name="password" autocomplete="off" />
                </div>-->
				
				<div class="form-group">
					<div class="input-group"> 
						<span class="input-group-addon"><i class="fa fa-lock" style="font-size: 19px;"></i></span>
						 <input type="password" class="form-control" placeholder="Password" required="" name="password" autocomplete="off" />
					</div>	
				</div>
				
				
				
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                <a href="http://www.afewtaps.com/establishment/index.php/auth/forgotPassword"><small>Forgot password?</small></a>
             </form>        </div>
    </div>
</body>
</html>