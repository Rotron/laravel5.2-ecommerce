@extends('adminz.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1><i class="fa fa-rocket"></i> MY LARAVEL STORE - DASHBOARD</h1>
        </div>
        
        <h2>Welcome {{ Auth::user()->user }} to the Management Panel of your online store.</h2><hr>
        
        <div class="row">
            
            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-list-alt icon-home"></i>
                    <a href="{{ route('adminz.category.index') }}" class="btn btn-warning btn-block btn-home-admin">CATEGORIES</a>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-shopping-cart  icon-home"></i>
                    <a href="{{ route('adminz.product.index') }}" class="btn btn-warning btn-block btn-home-admin">PRODUCTS</a>
                </div>
            </div>
                    
        </div>
        
        <div class="row">
            
            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-cc-paypal  icon-home"></i>
                    <a href="{{ route('adminz.order.index') }}" class="btn btn-warning btn-block btn-home-admin">ORDERS</a>
                </div>
            </div> 
            
            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-users  icon-home"></i>
                    <a href="{{ route('adminz.user.index') }}" class="btn btn-warning btn-block btn-home-admin">USERS</a>
                </div>
            </div>
                    
        </div>
        
    </div>
    <hr>

@stop