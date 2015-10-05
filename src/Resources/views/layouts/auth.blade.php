<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Maguma Administrator</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<!-- Bootstrap 3.3.4 -->
		<!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
		{!! HTML::style('packages/adminlte/bootstrap/css/bootstrap.min.css') !!}
		<!-- Font Awesome Icons -->
		<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> -->
		{!! HTML::style('packages/font-awesome/css/font-awesome.min.css') !!}
		<!-- Theme style -->
		<!-- <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" /> -->
		{!! HTML::style('packages/adminlte/dist/css/AdminLTE.min.css') !!}

		<!-- AdminLTE Skins. Choose a skin from the css/skins
		     folder instead of downloading all of them to reduce the load. -->
		<!-- <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" /> -->
		{!! HTML::style('packages/adminlte/dist/css/skins/skin-purple.min.css') !!}
        {!! HTML::style('packages/maguma/css/template.css') !!}
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="login-page">
		<div class="login-box">
			@yield('content')
		</div>

		<!-- jQuery 2.1.4 -->
		<!-- <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script> -->
		{!! HTML::script('packages/adminlte/plugins/jQuery/jQuery-2.1.4.min.js') !!}

		<!-- Bootstrap 3.3.2 JS -->
		<!-- <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script> -->
		{!! HTML::script('packages/adminlte/bootstrap/js/bootstrap.min.js') !!}

		<!-- AdminLTE App -->
		<!-- <script src="dist/js/app.min.js" type="text/javascript"></script> -->
		{!! HTML::script('packages/adminlte/dist/js/app.min.js') !!}
	</body>
</html>
