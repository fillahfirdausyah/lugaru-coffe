<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	{{-- Menu Style --}}
	<link rel="stylesheet" href="{{ asset('css/menuStyle.css') }}">

	{{-- Bootsrap Icons --}}
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

	{{-- AOS--}}
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	{{-- Animate CSS --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <title>Menu List</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img src="{{ asset('bootstrap-icons/logo__cafe_putih.png') }}" alt="Lugaru Logo" width="40" height="40" class="d-inline-block align-text-top">
			</a>
		</div>
	</nav>
	<div class="container mt-3">
		<div class="cover text-center">
			<img src="{{ asset('image/menu/menu-book.jpeg') }}" alt="" class="img-fluid">
			<div class="arrow">
				<h1 class="animate__animated animate__slideInDown animate__repeat-3"><a href="#"><i class="bi bi-arrow-down-circle" style="color: white"></i></a></h1>
				<span>Scroll Down</span>
			</div>
		</div>
		<div class="content text-center">
			<div class="content1" data-aos="fade-up" data-aos-duration="1500">
				<h2>Espresso Based</h2>
				<hr>
				<img src="{{ asset('image/menu/espresso.jpeg') }}" alt="" class="img-fluid">
			</div>
			<div class="content1 mt-4" data-aos="fade-up" data-aos-duration="1500">
				<h2>Milk Based</h2>
				<hr>
				<img src="{{ asset('image/menu/milk.jpeg') }}" alt="" class="img-fluid">
			</div>
			<div class="content1 mt-4" data-aos="fade-up" data-aos-duration="1500">
				<h2>Manual Brew</h2>
				<hr>
				<img src="{{ asset('image/menu/manual.jpeg') }}" alt="" class="img-fluid">
			</div>
			<div class="content1 mt-4" data-aos="fade-up" data-aos-duration="1500">
				<h2>Signature</h2>
				<hr>
				<img src="{{ asset('image/menu/espresso.jpeg') }}" alt="" class="img-fluid">
			</div>
			<div class="content1 mt-4" data-aos="fade-up" data-aos-duration="1500">
				<h2>Smoothies</h2>
				<hr>
				<img src="{{ asset('image/menu/smoothies.jpeg') }}" alt="" class="img-fluid">
			</div>
			<div class="content1 mt-4" data-aos="fade-up" data-aos-duration="1500">
				<h2>Mockatil</h2>
				<hr>
				<img src="{{ asset('image/menu/mocktail.jpeg') }}" alt="" class="img-fluid">
			</div>
			<div class="content1 mt-4" data-aos="fade-up" data-aos-duration="1500">
				<h2>Tea</h2>
				<hr>
				<img src="{{ asset('image/menu/tea.jpeg') }}" alt="" class="img-fluid">
			</div>
			<div class="content1 mt-4" data-aos="fade-up" data-aos-duration="1500">
				<h2>Snack</h2>
				<hr>
				<img src="{{ asset('image/menu/snack.jpeg') }}" alt="" class="img-fluid">
			</div>
			<div class="content1 mt-4" data-aos="fade-up" data-aos-duration="1500">
				<h2>Food</h2>
				<hr>
				<img src="{{ asset('image/menu/food.jpeg') }}" alt="" class="img-fluid">
			</div>
		</div>
	</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

	{{-- AOS --}}
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	{{-- AOS Initial --}}
	<script>
		AOS.init();
	  </script>
  </body>
</html>