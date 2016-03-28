@extends('adminPage')
@section('content')

<div class="container">
    <!-- Checks if the user is blocked or not. If he is not, he's displayed -->
    @foreach ($comments as $comment) 
        @if (!Firewall::isBlackListed($comment->ip))
        <div style="font-family : Verdana" class="panel panel-default">
                <div class="panel-header">
                    <div class="text-right">
                        <button class="btn btn-warning delete" data-id="{{ $comment->id }}" title="Delete" style="margin-right:3px; margin-top:3px;" ><i class="fa fa-close"></i></button>
                        <button class="btn btn-danger block" data-ip="{{ $comment->ip }}" title="Block this user" style="margin-right:3px; margin-top:3px;" ><i class="fa fa-ban"></i></button>
                    </div> 
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <label class="label label-success"><b>Name</b></label> <b>{{ $comment->name }}</b>
                        </li>
                        <li class="list-group-item">
                            <label class="label label-warning"><b>Email</b></label> <b>{{ (!empty($comment->email))? $comment->email : 'Not specified' }}</b>
                        </li>
                        <li class="list-group-item">
                            <label class="label label-warning"><b>Comment</b></label> <b>{{ $comment->comment }}</b>
                        </li>
                        <li class="list-group-item">
                            <label class="label label-default"><b>Create time</b></label> <b>{{ $comment->created_at }}</b>
                        </li>
                        <li class="list-group-item">
                            <label class="label label-default"><b>IP Adress</b></label> <b>{{ $comment->ip }}</b>
                        </li>
                    </ul>
                </div>
            </div>
        @endif
    @endforeach
    <div class="text-center">
        {!! $comments->render() !!}
    </div>
    
    {!! Html::script('js/adminComments.js') !!}
</div>

@stop