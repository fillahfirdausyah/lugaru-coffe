@extends('layouts.visit')
@section('title','Gallery')
@section('content')
<div class="container gallery-container">
    <h1>Gallery</h1>
    <hr>
    <div class="tz-gallery">
        <div class="row">
            @foreach($gallery as $g)
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="{{ asset('image/'.$g->image) }}">
                    <img src="{{ asset('image/'.$g->image) }}" alt="Park" width="100%" height="400">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection