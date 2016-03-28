@extends('adminPage')
@section('content')

    <div class="container">
        <!-- Checks if the user is blocked or not. If he is not, he's displayed -->
        @foreach ($orders as $order) 
            @if ($order->status == $status && !Firewall::isBlackListed($order->ip))
            <div style="font-family : Verdana" class="panel panel-default">
                <div class="panel-header">
                    <div class="text-right">
                        @if ($status == 0)
                        <button id="{{ $order->id }}" data-status="1" title="Finished" style="margin-right:3px; margin-top:3px;" class="btn btn-success orderStatus"><i class="fa fa-check"></i></button>
                        <button id="{{ $order->id }}" data-status="2" title="Delete" style="margin-right:3px; margin-top:3px;" class="btn btn-warning orderStatus"><i class="fa fa-close"></i></button>
                        @endif
                        
                        @if ($status == 1)
                        <button id="{{ $order->id }}" data-status="0" title="Not Finished" style="margin-right:3px; margin-top:3px;" class="btn btn-success orderStatus"><i class="fa fa-level-up"></i></button>
                        <button id="{{ $order->id }}" data-status="2" title="Delete" style="margin-right:3px; margin-top:3px;" class="btn btn-warning orderStatus"><i class="fa fa-close"></i></button>
                        @endif
                        
                        @if ($status == 2)
                        <button id="{{ $order->id }}" data-status="0" title="Back to active" style="margin-right:3px; margin-top:3px;" class="btn btn-success orderStatus"><i class="fa fa-level-up"></i></button>
                        <button id="{{ $order->id }}" data-status="2" title="Back to finished" style="margin-right:3px; margin-top:3px;" class="btn btn-warning orderStatus"><i class="fa fa-close"></i></button>
                        @endif
                        
                        <button id="{{ $order->id }}" data-ip="{{ $order->ip }}" title="Block this user" style="margin-right:3px; margin-top:3px;" class="btn btn-danger block"><i class="fa fa-ban"></i></button>
                    </div> 
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <label class="label label-success"><b>Name</b></label> <b>{{ $order->name }}</b>
                        </li>
                        <li class="list-group-item">
                            <label class="label label-default"><b>Phone</b></label> <b>{{ $order->phone }}</b>
                        </li>
                        <li class="list-group-item">
                            <label class="label label-warning"><b>From</b></label> <b>{{ $order->adress }}</b>
                        </li>
                        <li class="list-group-item">
                            <label class="label label-warning"><b>Where</b></label> <b>{{ $order->destination }}</b>
                        </li>
                        <li class="list-group-item">
                            <label class="label label-default"><b>Order time</b></label> <b>{{ $order->created_at }}</b>
                        </li>
                        <li class="list-group-item">
                            <label class="label label-default"><b>IP Adress</b></label> <b>{{ $order->ip }}</b>
                        </li>
                    </ul>
                </div>
            </div>
            @endif
        @endforeach
        <div class="text-center">
            {!! $orders->render() !!}
        </div>
    </div>
    {!! Html::script('js/adminOrders.js') !!}
@stop