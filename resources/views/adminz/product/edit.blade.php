@extends('adminz.template')

@section('content')
	
	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>
				PRODUCTS <small>[Edit product]</small>
			</h1>
		</div>

		<div class="row">
            <div class="col-md-offset-3 col-md-6">
                
                <div class="page">
                    
                    @if (count($errors) > 0)
                        @include('adminz.partials.errors')
                    @endif
                    
                    {!! Form::model($product, array('route' => array('adminz.product.update', $product->slug))) !!}
                    
                        <input type="hidden" name="_method" value="PUT">
                    
                        <div class="form-group">
                            <label class="control-label" for="category_id">Category</label>
                            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                        </div>
        
                        <div class="form-group">
                            <label for="name">Name:</label>
                            
                            {!! 
                                Form::text(
                                    'name', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Insert name...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="extract">Short Description:</label>
                            
                            {!! 
                                Form::text(
                                    'extract', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Insert a Short Description...',
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="description">Description:</label>
                            
                            {!! 
                                Form::textarea(
                                    'description', 
                                    null, 
                                    array(
                                        'class'=>'form-control'
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="price">Price:</label>
                            
                            {!! 
                                Form::text(
                                    'price', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Insert Price...',
                                    )
                                ) 
                            !!}
                        </div>

                        <div class="form-group">
                            <label for="price">Qty:</label>
                            
                            {!! 
                                Form::text(
                                    'qty', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Insert Quantity...',
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="image">Image:</label>
                            
                            {!! 
                                Form::text(
                                    'image', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Insert an image url ...',
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="visible">Visible:</label>
                            <input type="checkbox" name="visible" {{ $product->visible == 1 ? "checked='checked'" : '' }}>
                        </div>
                
                        
                        
                        
                        <div class="form-group">
                            {!! Form::submit('Confirm', array('class'=>'btn btn-primary')) !!}
                            <a href="{{ route('adminz.product.index') }}" class="btn btn-warning">Delete</a>
                        </div>
                    
                    {!! Form::close() !!}
                    
                </div>
                
            </div>
        </div>
        

	</div>

@stop