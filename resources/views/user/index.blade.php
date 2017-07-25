@extends('store.template')

@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-user"></i> My Profile</h1>
		</div>

		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<div class="page">

					@include('store.partials.errors')

				

							<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<div class="page">

				Change Password? <a href="{{ route('reset-password') }}">Click Here</a>

				</div>
			</div>
		</div>		
			
				</div>
			</div>
		</div>

	
	</div>
@stop