@extends('master')

@section('content')

<div class="custom-product">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            @foreach ($products as $product)
            <div class="carousel-item {{ $product->id == 1 ? ' active' : '' }}">
                <a href="detail/{{ $product->id }}">
                    <img src="{{ url($product->gallery) }}" class="d-block w-100 slider-img">
                    <div class="carousel-caption d-none d-md-block slider-text">
                        <h5>{{ $product->name }}</h5>
                        <p>{{ $product->description }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

        <div class="trending-wrapper">
            <h3>Trending Products</h3>
            @foreach ($products as $product)
            <div class="trending-item">
                <a class="text-decoration-none" href="detail/{{ $product->id }}">
                    <img src="{{ url($product->gallery) }}" class="trending-image">
                <div class="">
                    <h3>{{ $product->name }}</h3>
                </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection