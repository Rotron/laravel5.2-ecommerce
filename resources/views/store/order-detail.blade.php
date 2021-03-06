@extends('store.template')

@section('content')
	
	<div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-shopping-cart"></i> Order Details</h1>
		</div>

		<div class="page">
			<div class="table-responsive">
				<h3>Client data:</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr><td>Name:</td><td>{{ Auth::user()->name . " " . Auth::user()->last_name }}</td></tr>
					<tr><td>User:</td><td>{{ Auth::user()->user }}</td></tr>
					<tr><td>E-mail:</td><td>{{ Auth::user()->email }}</td></tr>
					<tr><td>Address:</td><td>{{ Auth::user()->address }}</td></tr>
				</table>
			</div>
			<div class="table-responsive">
				<h3>Order data</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr>
						<th>Product</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Subtotal</th>
					</tr>
					@foreach($cart as $item)
						<tr>
							<td>{{ $item->name }}</td>
							<td>£ {{ number_format($item->price,2) }}</td>
							<td>{{ $item->quantity }}</td>
							<td>£ {{ number_format($item->price * $item->quantity,2) }}</td>
						</tr>
					@endforeach
				</table><hr>
				<h3>
					<span class="label label-success">
						Total: £ {{ number_format($total, 2) }}
					</span>
				</h3><hr>
				<p>
					<div class="btn-group btn-group-justified">
					<a href="{{ route('cart-show') }}" class="btn btn-primary">
						<i class="fa fa-chevron-circle-left"></i> Go to cart
					</a>

					<a href="{{ route('payment') }}" class="btn btn-warning btn-lg ">
						<i class="fa fa-cc-paypal fa-5x"></i></br>
					</a>
					</div>
				</p>
			</div>
		</div>
	</div>

@stop