
@extends('store.template')

@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-user"></i> Password reset</h1>
		</div>

	
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<div class="page">

					@include('store.partials.errors')

{!! Form::open() !!}

{!! Form::password('password', ['placeholder' => 'Password']) !!}

{!! Form::password('password_confirmation', ['placeholder' => 'Password again']) !!}

{!! Form::submit('Reset password') !!}

{!! Form::close() !!}
				</div>
			</div>
		</div>

		
	</div>
@stop