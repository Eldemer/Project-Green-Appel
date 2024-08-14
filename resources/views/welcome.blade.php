@extends('layouts.master')


@section('content')


	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">كل </span> الاقسام</h3>
						<p>تسوق بكل راحة علي موقعنا الالكتروني </p>
					</div>
				</div>
			</div>





            <div class="row">




                @foreach ($categories as $item)


				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="/product/{{$item->id}}"><img src="{{$item -> imagepath}}" alt="" style="max-height: 200px; min-height: 200px " ></a>
						</div>
						<h3>{{$item -> name}}</h3>
                        <p>{{$item -> description}}</p>
					</div>
				</div>

                @endforeach



			</div>




		</div>
	</div>
	<!-- end product section -->
@endsection
