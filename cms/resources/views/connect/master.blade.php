<!DOCTYPE html>
<html>
<head>
	<title>MYCms - @yield('title')</title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-no">

    <!-- enlace  boostrab. -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ url('/static/css/connect.css?v='.time()) }}">

    <!-- enlace  fontawesome. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/b00d519aac.js" crossorigin="anonymous"></script>
</head>
	<body>
		@section('content')
		hola mundo
		@show
	</body>
</html> 