<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>
		{{ $title }}
		@yield('title', 'Test')		
	</title>
	
	<link href="{{ asset('css/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
	
</head>
 
<body>
 
 <!--
 navbar-dark default-color
-->
<nav class="navbar navbar-expand-lg">
	<div class="container">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="about">About us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="project">Project</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact">Contact</a>
				</li>
			</ul>
		</div>
	</div>
</nav>


<div class="container">	
	<div class="row">
		<div class="col-sm-2">
			@include('sidebar.home')
		</div>
		
		<div class="col-sm-10">
			<div class="container">
				@yield('content')
			</div>
		</div>
	</div>
</div>

<footer class="footer">
    <div class="container">
        <span class="text-muted">We Like Games</span>
    </div>
</footer>
 
<script src="/js/jquery-3.1.1.slim.min.js"></script>
<script src="/js/tether.min.js"></script>
<!--
<script src="/js/bootstrap.min.js"></script>
-->
	<script src="{{ asset('css/bootstrap/js/bootstrap.js') }}" crossorigin="anonymous"></script>
	<script src="{{ asset('css/bootstrap/js/bootstrap.min.js') }}" crossorigin="anonymous"></script>
		

</body>
</html>