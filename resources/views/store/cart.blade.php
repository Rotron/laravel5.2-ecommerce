@extends('store.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
		  <h1><i class="fa fa-shopping-cart"></i> Shopping Cart</h1>
		</div>

		<div class="table-cart">
			@if(count($cart))

			<p>
				<a href="{{ route('cart-trash') }}" class="btn btn-danger">
					Empty the cart <i class="fa fa-trash"></i>
				</a>
			</p>

			<div class="table-responsive">
				<table class="table table-striped table-hover table-bordered">
					<thead>
						<tr>
							<th>Image</th>
							<th>Product</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Subtotal</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						@foreach($cart as $item)
							<tr> 
								<td><img src="{{ $item->image }}"></td>
								<td>{{ $item->name }}</td>
								<td>£ {{ number_format($item->price,2) }}</td>
								<td>
								


        <div class="quantity">
          <button class="plus-btn fa fa-plus btn2" type="button" name="button">
           
          </button>
          <input
										type="number"
										min="1"
										max="100"
										value="{{ $item->quantity }}"
										id="product_{{ $item->id }}"
			>
          <button class="minus-btn fa fa-minus btn2" type="button" name="button">
           
          </button>

          <a 							name="update"
										href="#" 
										class="btn btn-warning btn-update-item"
										data-href="{{ $item->slug }}"
										data-id = "{{ $item->id }}"
									>
										<i class="fa fa-refresh"></i>
									</a>
        </div>
									
									
								</td>
								<td>£ {{ number_format($item->price * $item->quantity,2) }}</td>
								<td>
									<a href="{{ route('cart-delete', $item->slug) }}" class="btn btn-danger">
										<i class="fa fa-remove"></i>
									</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table><hr>
				
				<h3>
					<span class="label label-success">
						Total: £ {{ number_format($total,2) }}
					</span>
				</h3>

			</div>
			@else
				<h3><span class="label label-warning">Your cart is empty!</span></h3>
					<hr>
			<p>
				<a href="{{ route('home') }}" class="btn btn-primary btn-lg">
					<i class="fa fa-chevron-circle-left"></i> Continue shopping
				</a>

			
			</p>
		</div>

	</div>
			@endif
				<hr>
			<p>
			


					<div class="btn-group btn-group-justified">
					<a href="{{ route('home') }}" class="btn btn-primary">
						<i class="fa fa-chevron-circle-left"></i><text class="fa-1x"> Continue shopping</text>
					</a>

					<a href="{{ route('order-detail') }}" class="btn btn-warning btn-lg ">
						<i class="fa fa-chevron-down fa-1x"></i> <text class="fa-1x">Checkout</text></br>
					</a>
					</div>
			</p>
		</div>

	</div>
		
@stop