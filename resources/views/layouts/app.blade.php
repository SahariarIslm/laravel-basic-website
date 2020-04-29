<!DOCTYPE html>
<html>
<head>
	<title>Basic Website</title>
	<!-- Custom styles for this template -->
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/jumbotron.css" rel="stylesheet">
</head>
<body>
	@include('inc.navbar')
	<div class="container">
		@if(Request::is('/'))
			@include('inc.showcase')
		@endif
		<div class="row">
			<div class="col-md-8 col-lg-8">
				@include('inc.messages')
				@yield('content')
			</div>
			<div class="col-md-4 col-lg-4">
				@include('inc.sidebar')
			</div>
		</div>
	</div>
	<footer id="footer" class="text-center">Copyright 2019 &copy; Plumeria Yellow</footer>
</body>
</html>