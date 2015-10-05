<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Cristabel Administrator</title>
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
        {!! HTML::style('packages/cristabel/css/template.css') !!}
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="skin-purple sidebar-mini">
		<div class="wrapper">
			<header class="main-header">
				@include('administrator::layouts.partials.header')
			</header>
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="main-sidebar">
				@include('administrator::layouts.partials.sidebar')
			</aside>

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper" style="min-height: 901px;">
				<!-- Content Header (Page header) -->
				<!--
				<section class="content-header">
					<h1> Dashboard
						<small>Version 2.0</small>
					</h1>
				</section>
				-->
				<!-- Main content -->
				<section class="content">
					@yield('content')
				</section>
				<!-- /.content -->
			</div><!-- /.content-wrapper -->

			<footer class="main-footer">
				<div class="pull-right hidden-xs">
					<b>Version</b> 1.0
				</div>
				<strong>Copyright © 2015 <a href="http://cristabel.com">Cristabel</a>.</strong> All rights reserved.
			</footer>
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
