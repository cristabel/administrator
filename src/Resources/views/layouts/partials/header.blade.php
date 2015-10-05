<!-- Logo -->
<a href="index2.html" class="logo">
	<!-- mini logo for sidebar mini 50x50 pixels -->
	<span class="logo-mini">
		<b>{{ Config::get('cristabel.administrator.shortname') }}</b>
	</span>
	<!-- logo for regular state and mobile devices -->
	<span class="logo-lg">
		<b>{{ Config::get('cristabel.administrator.fullname') }}</b>
	</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
	<!-- Sidebar toggle button-->
	<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
		<span class="sr-only">Toggle navigation</span>
	</a>
	<!-- Navbar Right Menu -->
	<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
			<li class="dropdown user user-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<img src="{{ asset('/packages/cristabel/img/mitimiti_160.jpg') }}" class="user-image" alt="User Image">
					<span class="hidden-xs">Miguel Cabada</span>
				</a>
				<ul class="dropdown-menu">
					<!-- User image -->
					<li class="user-header">
						<img src="{{ asset('/packages/cristabel/img/mitimiti_160.jpg') }}" class="img-circle" alt="User Image">
						<p>Miguel Cabada
							<small>tohuma@gmail.com</small>
						</p>
					</li>
					<!-- Menu Body -->
					<li class="user-body">
						<div class="col-xs-12 text-center">
							<a href="{{ Config::get('cristabel.administrator.url') }}">{{ Config::get('cristabel.administrator.url') }}</a>
						</div>
					</li>
					<!-- Menu Footer-->
					<li class="user-footer">
						<div class="pull-left">
							<a href="#" class="btn btn-default btn-flat">Profile</a>
						</div>
						<div class="pull-right">
							<a href="#" class="btn btn-default btn-flat">Sign out</a>
						</div>
					</li>
				</ul>
			</li>
			<!-- Control Sidebar Toggle Button -->
		</ul>
	</div>
</nav>
