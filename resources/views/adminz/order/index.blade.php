@extends('adminz.template')

@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-shopping-cart"></i> ORDERS
            </h1>
        </div>
        
        <div class="page">
            
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>View Details</th>
                            <th>Delete</th>
                            <th>Date</th>
                            <th>Usuer</th>
                            <th>Subtotal</th>
                            <th>Shipping</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>
                                    <a 
                                        href="#" 
                                        class="btn btn-primary btn-detalle-pedido"
                                        data-id="{{ $order->id }}"
                                        data-path="{{ route('adminz.order.getItems') }}"
                                        data-toggle="modal" 
                                        data-target="#myModal"
                                        data-token="{{ csrf_token() }}"
                                    >
                                        <i class="fa fa-external-link"></i>
                                    </a>
                                </td>
                                <td>
                                    {!! Form::open(['route' => ['adminz.order.destroy', $order->id]]) !!}
        								<button onClick="return confirm('Delete record?')" class="btn btn-danger">
        									<i class="fa fa-trash-o"></i>
        								</button>
        							{!! Form::close() !!}
                                </td>
                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->user->name . " " . $order->user->last_name }}</td>
                                <td>${{ number_format($order->subtotal,2) }}</td>
                                <td>${{ number_format($order->shipping,2) }}</td>
                                <td>${{ number_format($order->subtotal + $order->shipping,2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <hr>
            
            <?php echo $orders->render(); ?>
            
        </div>
    </div>
    
    @include('adminz.partials.modal-detalle-pedido')
    
@stop


