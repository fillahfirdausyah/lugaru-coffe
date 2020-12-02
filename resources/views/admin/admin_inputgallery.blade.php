@extends('layouts.admin')

@section('title', 'Input Gallery')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="container">
	<div class="input_title">
		<h1 class="text-center">Tambah Gallery</h1>
	</div>
	<div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
		<form method="post" action="{{ '/pengurus/inputgallery' }}" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label for="image">Gambar </label>
				<input type="file" name="image">
			</div>
			<div class="form-group">
				<label for="name">Nama </label>
				<input type="text" class="form-control" name="name" id="name">
			</div>
			<div class="form-group">
				<label for="description">Deskripsi </label>
				<textarea id="description" class="form-control" name="description"></textarea>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Tambah">
			</div>
		</form>
	</div>
</div>
@endsection