@extends('store.template')

@section('content')
<div class="container text-center">
	<div class="page-header">
	  <h1><i class="fa fa-shopping-cart"></i>Product Details</h1>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="product-block">
				<img src="{{ $product->image }}">
			</div>	
		</div>
		<div class="col-md-6">
			<div class="product-block">
				<h3>{{ $product->name }}</h3><hr>
				<div class="product-info panel">
					<p>{{ $product->description }}</p>
					<h3>
						<span class="label label-success">Price: £ {{ number_format($product->price,2) }}</span>
					</h3>
					<br>
					<p><div class="btn-group btn-group-justified">
						<a class="btn btn-warning btn-block" href="{{ route('cart-add', $product->slug) }}">
							<text class="fa-2x">ADD TO CART</text> <i class="fa fa-cart-plus fa-2x"></i>
						</a>
					</div>
					</p>
				</div>
			</div>	
		</div>
	</div><hr>

	<p>
		<a class="btn btn-primary" href="{{ route('home') }}">
			<i class="fa fa-chevron-circle-left fa-2x"></i> <text class="fa-2x">Go Back</text>
		</a>
	</p>
</div>
@stop