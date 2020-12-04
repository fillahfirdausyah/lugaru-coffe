<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lugaru</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- icon -->
<link rel = "icon" href="{{ asset('bootstrap-icons/logo_cafe.png')}}" type = "image/x-icon"> 

<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('css/master.css')}}">
<link rel="stylesheet" type="text/css" 	href="{{asset('css/gallery-grid.css')}}">
</head>
<body>



<header>
<div id="top"></div>
	<nav class="fixed-top" id="navigation">
		<div class="row justify-content-between mt-3" id="myTopnav">
			<div id="logo" class="col-md-3 d-flex">
				<img src="{{ asset('bootstrap-icons/logo_cafe.png')}}" width="60" height="60">
			</div>
			<div class="col-md-5 d-flex">
				<button type="button" class="btn btn-sm direction" onclick="direction('top')"> Profil </button>
				<button type="button" class="btn btn-sm direction" onclick="direction('event')"> Event </button>
				<button type="button" class="btn btn-sm direction" onclick="direction('produk')"> Product </button>
				<button type="button" class="btn btn-sm direction" onclick="direction('gallery')"> Gallery </button>
				<button type="button" class="btn btn-sm direction" onclick="direction('contact')"> Reservation </button>
			</div>
		</div>
	</nav>
</header>

<main>

	<!-- Profil -->
	<section id="profil">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  	<ol class="carousel-indicators">
		   	 	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  	</ol>
		  	<div class="carousel-inner">
		    <div class="carousel-item active">
		      	<img class="d-block w-100" src="{{ asset('profile_image/'.$profileimg[0]->image) }}" alt="First slide" width="80%" height="400">
		    </div>
		    @if($profileimg->count() > 1)
		    <div class="carousel-item">
		      	<img class="d-block w-100" src="{{ asset('profile_image/'.$profileimg[1]->image) }}" alt="Second slide" width="80%" height="400">
		    </div>
		    <div class="carousel-item">
		      	<img class="d-block w-100" src="{{ asset('profile_image/'.$profileimg[2]->image) }}" alt="Third slide" width="80%" height="400">
		    </div>
		    @endif
		  	</div>
		  		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    		<span class="sr-only">Previous</span>
		  		</a>
		  		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Next</span>
		  		</a>
		</div>
	</div>
		</div>
		<div class="row profil mt-3">
			<div class="col-md-3 text-right about_us">
				<h1 class="mx-auto">About US</h1>
			</div>
			<div class="col-md-8">
				@if($profiledesc->count() > 0)
					{{$profiledesc[0]->description}}
				@endif
			</div>
	</section>
	<!-- /Profil -->
<hr>

	<!-- Event -->
	<section id="event">
  <div class="container my-4">
		<div class="text-center mb-3"><h1>Events</h1></div>
	@if($event->count() <= 0)
		<h1 class="text-center">Data Kosong</h1>
	@else
	@if($event->count() > 3)
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

      <div class="controls-top row justify-content-between mb-3">
        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left fa-2x"></i></a>
        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right fa-2x"></i></a>
      </div>

      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
        <li data-target="#multi-item-example" data-slide-to="2"></li>
      </ol>
      @endif
      <div class="carousel-inner" role="listbox">

        <div class="carousel-item active">
          	<div class="row justify-content-center">
          		@foreach($event as $e)
          		@if($loop->index <= 2)
            	<div class="col-md-4">
              		<div class="card mb-2">
                	<img class="card-img-top" src="{{ asset('image/'.$e->image) }}"
                  	alt="Card image cap" width="250" height="200">
                	<div class="card-body">
                  	<h4 class="card-title">{{ $e->title}}</h4>
                  	<p class="card-text">{{ $e->content }}</p>
                 	 <a href="/event/#{{$e->title}}" class="btn btn-primary">Baca lebih lanjut</a>
                	</div>
              		</div>
            	</div>
            	@endif
            	@endforeach
          	</div>
        </div>

        <div class="carousel-item">
          	<div class="row justify-content-center">
          		@foreach($event as $e)
          		@if($loop->index >= 3)
            	<div class="col-md-4">
              		<div class="card mb-2">
                	<img class="card-img-top" src="{{ asset('image/'.$e->image) }}"
                  	alt="Card image cap" width="250" height="200">
                	<div class="card-body">
                  	<h4 class="card-title">{{ $e->title}}</h4>
                  	<p class="card-text">{{ $e->content }}</p>
                 	 <a  href="/event/#{{$e->title}}"  class="btn btn-primary">Baca lebih lanjut</a>
                	</div>
              		</div>
            	</div>
            	@endif
            	@endforeach
          	</div>
      </div>

    </div>
    	<div class="text-center">
			<a href="{{ url('/event') }}"><h4>View More Our Events</h4></a>
		</div>
    @endif
</div>
	</section>
	<!-- /Events -->
<hr>

	<!-- Product -->
	<section class="produk" id="produk">
		<div class="text-center mb-3"><h1>Our Products</h1></div>
		@if($product->count() <= 0)
    		<h1 class="text-center">Data Kosong</h1>
    	@else
		<div class="container gallery-container">
    		<div class="tz-gallery">
	        	<div class="row">
	        		@foreach($product as $cp)
	        		
		            <div class="col-sm-6 col-md-4 mb-3">
		                <a class="lightbox" href="../image/{{$cp->image}}">
		                    <img src="{{ asset('image/'.$cp->image) }}" alt="Park" width="100%" height="400">
		                </a>
		            </div>

		            @endforeach
	        	</div>
    		</div>
		</div>
		<div class="text-center">
			<a href="{{ url('/product') }}"><h4>View More Our Products</h4></a>
		</div>
		@endif
	</section>
	<!-- /Product -->
<hr>

	<!-- Gallery -->
	<section class="gallery" id="gallery">
		<div class="text-center mb-3"><h1>Our Gallery</h1></div>
		@if($gallery->count() <= 0)
    		<h1 class="text-center">Data Kosong</h1>
    	@else
		<div class="container gallery-container mt-3">
			<div class="row">
				@foreach($gallery as $cg)
				<div class="col-md-4">
					<img src="{{ asset('image/'.$cg->image) }}" height="300" width="100%" alt="Sky">
				</div>
				@endforeach
			</div>
		</div>
		<div class="text-center">
			<a href="{{ url('/gallery') }}"><h4>View More Our Gallery</h4></a>
		</div>
		@endif
	</section>
	<!-- /Gallery -->

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



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
<script src="{{ asset('js/master.js')}}" type="text/javascript"></script>
</body>
</html>