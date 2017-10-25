<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Admin Portal</title>
	
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/style.css">
	
	<script type="text/javascript" src="/assets/jquery.js"></script>
	<script type="text/javascript" src="/assets/js/flot.js"></script>
	
	    <script src="{{ asset('js/vue.js') }}"></script>
	@yield('headscript')
	<style>
		#placeholder {
			width: 650px;
			height: 300px;
		}
	</style>
	@yield('css')
</head>
<body>
<div>
	<nav class="navbar navbar-inverse noPadding">
		<div class="container-fluid">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
				<a href="#" class="navbar-brand">Bicol Region</a>
			
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><button class="btn btn-default">Alert <span class="caret"></span></button></a>
						<ul class="dropdown-menu">
							<li><a href="#">Profile</a></li>
							<li><a href="#">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="col-md-2 noPadding">
		<ul class="navbar navbar-inverse nav sidebar">
			<li><a href="{{route('admin.index')}}"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
			<li><a href="#products" data-toggle="collapse"><span class="glyphicon glyphicon-th-large"></span> Region</a>
				<ul class="nav collapse" id="products">
					<li><a href="{{route('province.index')}}" id="destinations"><div class="col-md-1"></div><span class="glyphicon glyphicon-list"></span> Province</a></li>
					<li><a href="{{route('municipality.index')}}" id="destinations"><div class="col-md-1"></div><span class="glyphicon glyphicon-list"></span> City/Municipality</a></li>
					<li><a href="{{route('destination.index')}}" id="destinations"><div class="col-md-1"></div><span class="glyphicon glyphicon-list"></span> Barangays</a></li>
					<li><a href="{{route('destination.index')}}" id="destinations"><div class="col-md-1"></div><span class="glyphicon glyphicon-list"></span> Destinations</a></li>


					
				</ul>
			</li>
			<li><a href="{{route('official.index')}}"><span class="glyphicon glyphicon-download-alt"></span> Region Officials</a></li>

			<li><a href="{{route('article.index')}}"><span class="glyphicon glyphicon-file"></span> Articles</a></li>

			<li><a href="{{route('event.index')}}"><span class="glyphicon glyphicon-download-alt"></span> Events</a></li>

{{-- 			<li><a href="#people" data-toggle="collapse"><span class="glyphicon glyphicon-user"></span> Events</a>
				<ul class="nav collapse" id="people">
					<li><a href="client_list.html"><div class="col-md-1"></div><span class="glyphicon glyphicon-user"></span> Authors</a></li>
					<li><a href="supplier_list.html"><div class="col-md-1"></div><span class="glyphicon glyphicon-user"></span> Blogers</a></li>
					<li><a href="add_client.html"><div class="col-md-1"></div><span class="glyphicon glyphicon-floppy-saved"></span> Others</a></li>
					<li><a href="add_supplier.html"><div class="col-md-1"></div><span class="glyphicon glyphicon-floppy-saved"></span></a></li>
				</ul>
			</li>
			<li><a href="#setting" data-toggle="collapse"><span class="glyphicon glyphicon-cog"></span> Setting</a>
				<ul class="nav collapse" id="setting">
					<li><a href="#"><div class="col-md-1"></div><span class="glyphicon glyphicon-list"></span> ---------</a></li>
					<li><a href="#"><div class="col-md-1"></div><span class="glyphicon glyphicon-list"></span> ---------</a></li>
				</ul>
			</li>
			<li><a href="reports.html"><span class="glyphicon glyphicon-file"></span> Reports</a></li> --}}
		</ul>
	</div>
	
	<br>
	<div>
	@yield('content')

	@yield('modals')
	@yield('scripts')
	@yield('vue-scripts')
	</div>
	</div>
	
		
	<!-- jquery plugin -->
	
	<!-- bootstrap js -->
	<script src="/assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>
	@yield('js')
</body>
</html>