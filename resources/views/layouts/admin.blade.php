<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title')</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- icon -->
<link rel = "icon" href="{{ asset('bootstrap-icons/logo_cafe.png')}}" type = "image/x-icon"> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">
</head>
<body>
<header>
	<div class="row justify-content-center">
		<div class="col text-center">
			<h2>LUGARU CAFE</h2>
		</div>
	</div>
</header>

<div class="row">
	<div class="sidenavbar col-3">
		<div class="nav-head">Admin Panel</div>
		<div>
			<a href="{{url('.')}}"><button class="btn btn-primary">Website</button></a>
			<a href="/pengurus"><button class="btn btn-primary">Dashboard</button></a>
			<a href="/pengurus/event"><button class="btn btn-primary">Event</button></a>
			<a href="/pengurus/gallery"><button class="btn btn-primary">Gallery</button></a>
			<a href="/pengurus/product"><button class="btn btn-primary">Product</button></a>
			<a href="/pengurus/feedback"><button class="btn btn-primary">Feedback</button></a>
		</div>
		<form method="post" action="{{ route('logout') }}" class="logout">
			@csrf
			<button class="btn btn-danger">Logout</button>
		</form>
	</div>
	<div class="col-9 main">
		@yield('content')
	</div>		
</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</body>
</html>