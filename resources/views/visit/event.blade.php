@extends('layouts.visit')
@section('title', 'Event')
@section('content')
<h1 class="text-center mb-3">Events</h1>
<hr>
<div class="container">
	@foreach($event as $e)
	@if($loop->even)
	<div class="row" id="{{ $e->title }}">
		<div class="col-md-4">
			<img src="{{asset('image/'.$e->image)}}" height="350" width="100%">
		</div>
		<div class="col-md-8" style="border-left: 2px solid #000000;">
			<div class="text-center"><u><h3>{{ $e->title }}</h3></u></div>
			<br>
			<small><u>Tanggal {{ $e->date }}, Jam {{ $e->clock }}</u></small>
			<br>
			<p>{{ $e->content }}</p>
		</div>
	</div>

	<hr>
	@endif
	
	@if($loop->odd)
	<div class="row" id="{{ $e->title }}">
		<div class="col-md-8" style="border-right: 2px solid #000000;">
			<div class="text-center event-title"><u><h2>{{ $e->title }}</h2></u></div>
			<br>
			<small><u>Tanggal {{ $e->date }}, Jam {{ $e->clock }}</u></small>
			<br>
			<p>{{ $e->content }}</p>
		</div>
		<div class="col-md-4">
			<img src="{{asset('image/'.$e->image)}}" height="350" width="100%">
		</div>
	</div>
	
	<hr>
	@endif
	@endforeach
</div>
@endsection