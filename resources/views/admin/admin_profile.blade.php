@extends('layouts.admin')

@section('title', 'Edit Profil')

@section('content')
<div class="container">
	<div class="input_title">
		<h1 class="text-center">Ubah Profil</h1>
	</div>
	@if ($errors->any())
		<div class="alert alert-danger">
		    <ul>
		        @foreach ($errors->all() as $error)
		            <li>{{ $error }}</li>
		        @endforeach
		    </ul>
		</div>
	@endif
	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif
	<div class="row">
		<div class="col-6 card" id="imageProfile">
			<h3 class="text-center">Ubah Gambar</h3>
			<hr>
			<form method="post" action="{{'/pengurus/profile/img'}}" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="image">Gambar </label>
					<input type="file" name="image">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Ubah">
				</div>			
			</form>
		</div>
		<div class="col-6 card" id="descriptionProfile">
			<h3 class="text-center">Ubah Deskripsi</h3>
			<hr>
			<form method="post" action="{{'/pengurus/profile/desc'}}">
				@csrf
				<div class="form-group">
					<label for="description">Deskripsi </label>
					<textarea id="description" name="description" class="form-control" placeholder="deskripsi profil"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Ubah">
				</div>
			</form>	
		</div>
	</div>
</div>
@endsection