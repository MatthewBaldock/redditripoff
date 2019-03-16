<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Reddit Ripoff</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
		<nav class="navbar navbar-inverse fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="#">Reddit Ripoff</a>
			</div>
			<ul class="nav navbar-nav">
			  <li class="active"><a href="/">Home</a></li>
			</ul>
			</div>
		</nav>
	<div class="canvas">
		<div class="container">
			@yield('content')
		</div>
	</div>
	<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
	
</html>
