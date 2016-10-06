<!DOCTYPE html>
<html ng-app>
	<head>
		<title>GameBattleStats</title>
		<link rel="stylesheet" type="text/css" href="templates/gbs/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="templates/gbs/css/main.css">

    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
		<script type="text/javascript" src="templates/gbs/js/bootstrap.min.js"></script>
	</head>
	<body>
	    <div class="container search-nav">
	        <div class="col-md-10">
	        </div>
	        <div class="col-md-2">
	            <a href="#">
	                <span class="glyphicon glyphicon-search"></span>
	            </a>
	            <a href="#" data-toggle="modal" data-target="#signinModal">
	                <span class="glyphicon glyphicon-user"></span>
	            </a>
	        </div>
	    </div>

	    <nav class="navbar header">
	        <div class="container">
	            <div class="navbar-header col-md-4">
	                <a href="#" class="navbar-brand"><img src="templates/gbs/images/logo.png" alt="" class="img-responsive logo"></a>
	            </div>

	            <div class="col-md-6 col-md-offset-2">
	                <ul class="nav navbar-nav text-center">
	                    <li class="active"><a href="{{ url('/') }}">Home</a></li>
	                    <li class="dropdown" role="presentation">
	                    	<a class="dropdown-toggle" data-toggle="dropdown" href="#"
	                    		role="button" aria-haspopup="true" aria-expanded="false">
	                    		Tournaments <span class="caret"></span>
	                    	</a>
	                    	<ul class="dropdown-menu">
	                    		<li><a href="#">Teams</a></li>
	                    	</ul>
	                    </li>
	                    <li><a href="{{ url('/ladders') }}">Ladders</a></li>
	                    <li><a href="#">FAQ</a></li>
	                </ul>
	            </div>
	        </div>
	    </nav>
		@yield('header')

		@yield('content')

		@section('footer')
		<div class="copyright-footer">
			<div class="container">
				<div class="col-md-12">
					<p>Copyright &copy;GameBattleStats 2016 | Code by <a href="http://georgerujoiu.com" target="_blank">George Rujoiu</a></p>
				</div>
			</div>
		</div>

		<div class="modal fade" id="signinModal" tabindex="-1" role="dialog" aria-labelledby="signinLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title text-uppercase" id="signinLabel">Sign in</h4>
					</div>

					<div class="modal-body">
						<form action="" method="post">
							<div class="form-group">
								<label for="email">E-mail address</label>
								<input type="text" name="email" id="email" class="form-control" placeholder="Type in your e-mail">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" id="password" class="form-control" placeholder="Type in your password">
							</div>
							<input type="submit" value="Sign in" class="btn btn-default">
						</form>
					</div>
				</div>
			</div>
		</div>

		<script src="{{url('templates/gbs/js/main.js')}}"></script>
	</body>
</html>