@extends('adminPage')
@section('content')

<div class="container">
    @foreach ($comments as $comment) 
        <div style="font-family : Verdana" class="panel panel-default">
                <div class="panel-header">
                    <div class="text-right">
                        <button id="{{ $comment->id }}" data-status="2" title="Удалить" style="margin-right:3px; margin-top:3px;" class="btn btn-warning status"><i class="fa fa-close"></i></button>
                        <button id="{{ $comment->id }}" data-ip="{{ $comment->ip }}" title="Заблокировать пользователя" style="margin-right:3px; margin-top:3px;" class="btn btn-danger block"><i class="fa fa-ban"></i></button>
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
    @endforeach
    <div class="text-center">
        {!! $comments->render() !!}
    </div>
</div>

@stop