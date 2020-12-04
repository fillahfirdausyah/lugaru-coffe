@extends('layouts.visit')
@section('title','Product')
@section('content')
<div class="container gallery-container">
    <h1>Our Products</h1>
    <hr>
    <div>
        <div class="row justify-content-center category">
            <div class="col-4 mx-auto text-center">
                <button onclick="category('Beverages')">
                    Beverages
                </button>
            </div>
            <div class="col-4 text-center mx-auto">
                <button onclick="category('all')">
                    All
                </button>
            </div>
            <div class="col-4 text-center mx-auto">
                <button onclick="category('Snacks')">
                    Snacks
                </button>
            </div>
        </div>
        <hr>
        <div class="product-container">
            <div class="row">
            @foreach($product as $p)
            <div class="col-md-4 product mb-3">
                    <img src="{{asset('image/'.$p->image)}}" height="350">
                <div class="contains">
                    <span class="product-title">{{ $p->name }}</span><br>
                    <p>Kandungan : {{ $p->contains }}</p>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection