<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')| Admin - BackEnd</title>
	<meta name="description" content="Bksensor Admin - HTML5 Admin Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="{{asset('public/backend')}}/">
	<link rel="apple-touch-icon" href="apple-icon.png">
	<link rel="shortcut icon" href="favicon.ico">
	@yield('header')
</head>
<body>


	<!-- Left Panel -->

	@include('backend.left_menu')
	<!-- /#left-panel -->

	<!-- Left Panel -->

	<!-- Right Panel -->

	<div id="right-panel" class="right-panel">

		<!-- Header-->
		@include('backend.header')
		<!-- /header -->

		<!-- master -->
		@yield('main')
		<!-- /master -->


	</div>
	<!-- /#right-panel -->
	<!-- script -->
	@yield('script')
	<!-- /script -->	
</body>
</html>
