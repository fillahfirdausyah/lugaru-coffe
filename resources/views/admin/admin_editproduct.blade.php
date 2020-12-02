@extends('layouts.admin')

@section('title', 'Edit Product')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="container">
	<div class="input_title">
		<h1 class="text-center">Ubah Product</h1>
	</div>
	<div>
		<form method="post" action="{{ '/pengurus/editproduct/'.$product->id }}" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
			  	<label for="title">Nama:</label>
			  	<input type="text" class="form-control" id="title" name="name">
			</div>
			<div class="form-group">
			    <label for="category">Kategori </label>
			    <select class="form-control" id="category" name="category">
			      <option>Beverages</option>
			      <option>Snacks</option>
			    </select>
			</div>
			<div class="form-group">
			  	<label for="content">Kandungan:</label>
			  	<textarea id="content" class="form-control" name="contains"></textarea>
			</div>
			<div class="form-group">
				<label for="image">Gambar </label>
				<input type="file" name="image">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Ubah">
			</div>
		</form>
	</div>
</div>
@endsection