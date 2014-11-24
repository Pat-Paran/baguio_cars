<!DOCTYPE html>
<html>
<head>
	<title>Baguio Cars</title>
	{{ HTML::script('src/bower_components/jquery/dist/jquery.js') }}
	{{ HTML::style('src/slick/slick/slick.css') }}
	{{ HTML::script('src/slick/slick/slick.js') }}
	{{ HTML::style('src/stylesheets/app.css') }}
</head>
<body>
	@include('includes.header')
	@include('includes.slider')
	@yield('content')
	@include('includes.footer')

</body>
<script type="text/javascript">
	$('.slider').slick({
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 2
});
</script>
</html>