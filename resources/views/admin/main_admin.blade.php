@extends('layouts.admin')
@section('title','Admin')
@section('content')
<h1 class="text-center">Welcome to Admin Lugaru Cafe</h1>
<div class="row admin-dashboard">
	<div class="col-5 dashboard-event">
		<span class="title"> Event </span>
		<hr>
		<br>
		<a href="/pengurus/event">More Info</a>
	</div>
	<div class="col-5 dashboard-product">
		<span class="title"> Product </span>
		<hr>
		<br>
		<a href="/pengurus/product">More Info</a>
	</div>
	<div class="col-5 dashboard-gallery">
		<span class="title"> Gallery </span>
		<hr>
		<br>
		<a href="/pengurus/gallery">More Info</a>
	</div>
	<div class="col-5 dashboard-feedback">
		<span class="title"> Feedback </span>
		<hr>
		<br>
		<a href="/pengurus/feedback">More Info</a>
	</div>
</div>

@endsection