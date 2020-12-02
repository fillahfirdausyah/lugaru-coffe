@extends('layouts.admin')

@section('title', 'Edit event')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="container">
	<div class="input_title">
		<h1 class="text-center">Ubah Event</h1>
	</div>
	<div>
		<form method="post" action="{{ '/pengurus/editevent/'.$event->id }}" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
			  	<label for="title">Judul:</label>
			  	<input type="text" class="form-control" id="title" name="title">
			</div>
			<div class="form-group">
			  	<label for="content">Content:</label>
			  	<textarea id="content" class="form-control" name="content"></textarea>
			</div>
			<div class="form-row">
				<div class="form-group">
				  	<label for="date">Tanggal:</label>
				  	<input type="text" class="form-control" id="date" name="date" placeholder="Format: DD-MM-YYYY">
			  	</div>
			  	<div class="form-group">
				  	<label for="clock">Jam:</label>
				  	<input type="text" class="form-control" id="clock" name="clock" placeholder="Format: 00:00">
			  	</div>
			</div>
			<div class="form-group">
				<label for="image">Gambar </label>
				<input type="file" name="image">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Tambah">
			</div>
		</form>
	</div>
</div>
@endsection