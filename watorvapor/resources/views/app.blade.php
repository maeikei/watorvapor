<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>Wator Vapor</title>
        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
	<!-- jquery -->
	<script>
  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  			
  		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  		ga('create', 'UA-47276237-1', 'watorvapor.com');
  		ga('send', 'pageview');
	</script>
	<!-- jquery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>
    <body>
		@include('navbar')
		@yield('content')
    </body>
</html>

