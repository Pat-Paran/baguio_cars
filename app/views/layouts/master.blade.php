<!DOCTYPE html>
<html>
<head>
	<title>Baguio Cars</title>
	{{ HTML::style('src/stylesheets/app.css') }}
	{{ HTML::style('src/css/app.css') }}
</head>
<body>
	@include('includes.header')
	@include('includes.slider')
	@yield('content')

</body>
</html>