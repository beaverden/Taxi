@extends('index')
@section('content')


    
    @include('flash::message')
    
    <h2 class="page-header">Leave a comment</h2>
    <!-- Comment form -->
    {!! Form::open(array('action' => 'HomeController@addComment', 'role' => 'form')) !!}
        <!-- Email -->
        <div class="form-group">
            {!! Form::label('Email Adress') !!}
            {!! Form::email('email', null, 
                array('class' => 'form-control', 
                      'placeholder' => 'Not necessary',
                      'maxlength' => '50')) !!}
        </div>
        <!-- /.Email -->
        <!-- Name -->
        <div class="form-group">
            {!! Form::label('Name') !!}
            {!! Form::text('name', null, 
                array('required', 
                      'class'=>'form-control', 
                      'placeholder'=>'Your name',
                      'maxlength' => '50')) !!}
        </div>
        <!-- /.Name -->

        <!-- Message -->
        <div class="form-group">
            {!! Form::label('Message') !!}
            {!! Form::textarea('comment', null, 
                array('required', 
                      'class'=>'form-control', 
                      'placeholder'=>'Less than 140 symbols',
                      'maxlength' => '140',
                      'rows' => '2')) !!}
        </div>
        <!-- /.Message -->
        <div class="form-group">
            {!! Form::submit('Send!', 
              array('class' => 'btn btn-success')) !!}
        </div>
    {!! Form::close() !!}
    <!-- /.Comment form -->
    
    
    @foreach ($comments as $comment) 
        @if (!Firewall::isBlacklisted($comment->ip))
        <div id="{{ $comment->id }}" class="media well">
            <div class="media-body">
                <h4 class="media-heading">{{$comment->name}}   
                    <small><i>{{$comment->email}}</i></small>
                </h4>
              {{$comment->comment}}
            </div>
          </div>
        @endif
    @endforeach
    
    
    
    <div class="text-center">
        {!! $comments->render() !!}
    </div>

@stop
