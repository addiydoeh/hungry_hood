<!Doctype html>
<html>
<head>
	<title>@yield('page_title')</title>
	{!! Html::style('bootstrap/css/bootstrap.min.css') !!}	
</head>
<body>	
	<div class='container'>
		<h2> Booking </h2>
		@yield('content')
	</div>
	{!! Html::script('js/jquery.min.js') !!}
	{!! Html::script('bootstrap/js/bootstrap.minjs') !!}
</body>
</html>