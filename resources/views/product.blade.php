@extends('layouts.master')

@section('content')


<!-- product section -->
<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Our</span> Products</h3>
                    <p>اهلا بكم في متجرنا الالكتروني </p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($products as $item)
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="#"><img style="max-height: 225px ; min-height: 225px ; " src="{{$item -> imagepath}}" alt=""></a>
                    </div>
                    <h3>{{$item -> name}}</h3>
                    <p class="product-price"><span>Quantity {{$item -> quantity}}</span> {{$item -> price}} $</p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- end product section -->










@endsection
