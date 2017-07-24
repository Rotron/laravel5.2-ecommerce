@extends('store.template')

@section('content')

@include('store.partials.slider')

 <form action="/location/" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Address</label>

                <div class="col-sm-6">
                    <input type="text" name="street" id="task-name" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Check Address
                    </button>
                </div>
            </div>
        </form>
{{$location}}
@stop