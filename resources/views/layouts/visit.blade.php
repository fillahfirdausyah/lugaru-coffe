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


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
<link rel="stylesheet" href="{{asset('css/fluid-gallery.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/visit.css')}}">
</head>
<body>
<header>
	<nav id="navigation">
		<div class="row" id="myTopnav">
			<div class="col-md-6 d-flex">
				<a href="{{ url('/') }}"><img class="mr-3" src="{{ asset('bootstrap-icons/logo__cafe_putih.png')}}" width="60" height="60" alt="home"></a>
				<a href="{{ url('/event') }}"><button type="button" class="btn btn-sm direction"> Event </button></a>
				<a href="{{ url('/product') }}"><button type="button" class="btn btn-sm direction"> Product </button></a>
				<a href="{{ url('/gallery') }}"><button type="button" class="btn btn-sm direction"> Gallery </button></a>
			</div>
		</div>
	</nav>
</header>
<main>
		@yield('content')
</main>

<footer class="container-fluid">
	<div>
		<div class="row justify-content-center">
			<div class="col-6" id="contact">
				<div class="text-center"><h3>Reservation</h3></div>
				<hr>
				<strong>Phone  :</strong> +6282225859154
				<br>
				<strong>E-mail :</strong> lugarujogja@gmail.com
				<br>
				<strong>Instagram :</strong> lugarucoffee
				<br>
				<strong>Address :</strong> Jl. Maskumambang No. 18, Klaseman Rt 06/Rw 38 Sinduharjo, Ngaglik, Sleman, Yogyakarta 55581
			</div>
			<div class="col-6" id="advice">
				@if (session('status'))
				    <div class="alert alert-success">
				        {{ session('status') }}
				    </div>
				@endif
				@if ($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif
				<span class="text-center"><h3>Feedback</h3></span>
				<hr>
				<form method="post" action="{{'/feedback'}}">
					@csrf
						<div class="form-row mb-2">
							<input type="email" id="email-form" name="email" class="form-control" placeholder="E-mail">
						</div>
					  	<div class="form-row">
					      	<textarea name="feedback" id="kritik" class="form-control" rows="5" placeholder="Your Feedback"></textarea>
					  	</div><br>
					  	<div class="form-group">
							<div class="captcha">
								<span>{!! captcha_img() !!}</span>
								<button type="button" class="btn btn-danger" class="reload" id="reload">
								↻</button>
							</div>
						</div>
						<div class="form-group">
							<input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
						</div>
					  <div class="mb-2">
					  		<input type="submit" class="btn-sm" value="Send">
					  </div>
				</form>
			</div>
		</div>
	</div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>baguetteBox.run('.tz-gallery');</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/visit.js')}}" type="text/javascript"></script>
</body>
</html>