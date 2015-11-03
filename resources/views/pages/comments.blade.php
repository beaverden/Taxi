@extends('index')
@section('content')

<div class="content">
    @if (isset($message))
        <p class="label label-success"> {{ $message }}</p>
    @endif
    
    
    <h2 class="page-header">Оставьте отзыв</h2>
    
    <!-- Comment form -->
    {!! Form::open(array('action' => 'HomeController@addComment')) !!}
    <!-- Email -->
    <div class="form-group">
        {!! Form::label('Адресс электронной почты') !!}
        {!! Form::email('email', null, 
            array('class' => 'form-control', 
                  'placeholder' => 'Не обязательно')) !!}
    </div>
    <!-- /.Email -->
    <!-- Name -->
    <div class="form-group">
        {!! Form::label('Имя') !!}
        {!! Form::text('name', null, 
            array('required', 
                  'class'=>'form-control', 
                  'placeholder'=>'Ваше имя')) !!}
    </div>
    <!-- /.Name -->

    <!-- Message -->
    <div class="form-group">
        {!! Form::label('Сообщение') !!}
        {!! Form::textarea('comment', null, 
            array('required', 
                  'class'=>'form-control', 
                  'placeholder'=>'Не больше 140 символов',
                  'maxlength' => "140",
                  'rows' => "2")) !!}
    </div>
    <!-- /.Message -->
    <div class="form-group">
        {!! Form::submit('Оставить!', 
          array('class' => 'btn btn-success')) !!}
    </div>
    {!! Form::close() !!}
    <!-- /.Comment form -->
    
    
    @foreach ($comments as $comment) 
        <div id="{{ $comment->id }}" class="media well">
            <div class="media-body">
                <h4 class="media-heading">{{$comment->name}}   
                    <small><i>{{$comment->email}}</i></small>
                </h4>
              {{$comment->comment}}
            </div>
          </div>
    @endforeach
    
    
    
    <div class="text-center">
        {!! $comments->render() !!}
    </div>
</div>
@stop
