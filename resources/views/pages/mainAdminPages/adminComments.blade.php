@extends('adminPage')
@section('content')

<div class="container">
    @foreach ($comments as $comment) 
        @if (!Firewall::isBlackListed($comment->ip))
        <div style="font-family : Verdana" class="panel panel-default">
                <div class="panel-header">
                    <div class="text-right">
                        <button class="btn btn-warning delete" data-id="{{ $comment->id }}" title="Удалить" style="margin-right:3px; margin-top:3px;" ><i class="fa fa-close"></i></button>
                        <button class="btn btn-danger block" data-ip="{{ $comment->ip }}" title="Заблокировать пользователя" style="margin-right:3px; margin-top:3px;" ><i class="fa fa-ban"></i></button>
                    </div> 
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <label class="label label-success"><b>Имя</b></label> <b>{{ $comment->name }}</b>
                        </li>
                        <li class="list-group-item">
                            <label class="label label-warning"><b>Почта</b></label> <b>{{ (!empty($comment->email))? $comment->email : 'Не указана' }}</b>
                        </li>
                        <li class="list-group-item">
                            <label class="label label-warning"><b>Отзыв</b></label> <b>{{ $comment->comment }}</b>
                        </li>
                        <li class="list-group-item">
                            <label class="label label-default"><b>Время создания</b></label> <b>{{ $comment->created_at }}</b>
                        </li>
                        <li class="list-group-item">
                            <label class="label label-default"><b>IP адресс</b></label> <b>{{ $comment->ip }}</b>
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