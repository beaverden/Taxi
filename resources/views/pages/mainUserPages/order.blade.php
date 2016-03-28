@extends('index')
@section('content')

<div class="content">
    @include('flash::message')
    
    
    <h2 class="page-header text-center">Order</h2>
    
    <!-- Comment form -->
    {!! Form::open(array('action' => 'HomeController@addOrder')) !!}

    <!-- Name -->
    <div class="form-group">
        {!! Form::label('Name') !!}
        {!! Form::text('name', null, 
            array('required', 
                  'class' => 'form-control', 
                  'placeholder' => 'Your name',
                  'maxlength' => '50')) !!}
    </div>
    <!-- /.Name -->
    
    <!-- Phone number -->
    <div class="form-group">
        {!! Form::label('Phone') !!}
        {!! Form::text('phone', null, 
            array('required', 
                  'class'=>'form-control', 
                  'placeholder'=>'(495)555-55-55',
                  'maxlength' => '15')) !!}
    </div>
    <!-- /.Phone number -->
    
    <!-- Adress -->
    <div class="form-group">
        {!! Form::label('From where?') !!}
        {!! Form::text('adress', null, 
            array('required', 
                  'class'=>'form-control', 
                  'placeholder'=>'Town, street, number ... ',
                  'maxlength' => '50')) !!}
    </div>
    <!-- /.Adress -->
    
    <!-- Destination Adress -->
    <div class="form-group">
        {!! Form::label('To where?') !!}
        {!! Form::text('destination', null, 
            array('required', 
                  'class'=>'form-control', 
                  'placeholder' => 'Town, street, number ... ',
                  'maxlength' => '50')) !!}
    </div>
    <!-- /.Destination Adress -->
       
    <div class="form-group">
        {!! Form::submit('Order!', 
          array('class' => 'btn btn-warning')) !!}
    </div>
    {!! Form::close() !!}
    <!-- /.Comment form -->
</div>
@stop
