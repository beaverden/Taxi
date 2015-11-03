@extends('index')
@section('content')

<div class="content">
    @if (isset($message))
        <p class="label label-success"> {{ $message }}</p>
    @endif
    
    
    <h2 class="page-header text-center">Заказать</h2>
    
    <!-- Comment form -->
    {!! Form::open(array('action' => 'HomeController@addOrder')) !!}

    <!-- Name -->
    <div class="form-group">
        {!! Form::label('Имя') !!}
        {!! Form::text('name', null, 
            array('required', 
                  'class'=>'form-control', 
                  'placeholder'=>'Ваше имя')) !!}
    </div>
    <!-- /.Name -->
    
    <!-- Phone number -->
    <div class="form-group">
        {!! Form::label('Телефон') !!}
        {!! Form::text('phone', null, 
            array('required', 
                  'class'=>'form-control', 
                  'placeholder'=>'(495)555-55-55')) !!}
    </div>
    <!-- /.Phone number -->
    
    <!-- Adress -->
    <div class="form-group">
        {!! Form::label('Откуда') !!}
        {!! Form::text('adress', null, 
            array('required', 
                  'class'=>'form-control', 
                  'placeholder'=>'Ул, дом, подъезд и т.д.')) !!}
    </div>
    <!-- /.Adress -->
    
    <!-- Destination Adress -->
    <div class="form-group">
        {!! Form::label('Куда') !!}
        {!! Form::text('destination', null, 
            array('required', 
                  'class'=>'form-control', 
                  'placeholder'=>'Ул, дом, подъезд и т.д.')) !!}
    </div>
    <!-- /.Destination Adress -->
       
    <div class="form-group">
        {!! Form::submit('Заказать!', 
          array('class' => 'btn btn-warning')) !!}
    </div>
    {!! Form::close() !!}
    <!-- /.Comment form -->
</div>
@stop
