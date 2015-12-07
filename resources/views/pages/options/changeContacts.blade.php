@extends('adminPage')
@section('content')

<div class="container">
    <div class="form-group">@include('flash::message')</div>
    <!-- MAIN NUMBER -->
    {!! Form::open(array('action' => 'AdminSettingsController@changeContacts',
                         'data-id' => '1')) !!}
    <div class="row">
        <div class="col col-lg-6 col-lg-offset-3 span3 list-group">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><b>Основной</b></span>
                    <input type="text" class="form-control" placeholder="Сейчас : {{ $contacts[0]->tel }}" aria-describedby="basic-addon1">
                   
                    <div class="input-group-btn">
                         {!! Form::submit('Сохранить', 
                            array('class' => 'btn btn-success',
                                  'style' => 'margin-left:5px;')) !!}
                    </div>
            </div> 
        </div>
    </div>
    {!! Form::close() !!}
    <!-- /.MAIN NUMBER -->
    
    @foreach ($contacts as $contact) 
        @if ($contact->id > 0)
            {!! Form::open(array('action' => 'AdminSettingsController@changeContacts',
                         'data-id' => $contact->id)) !!}
            <div class="row fluid">
                <div class="col col-lg-6 col-lg-offset-3 span3 list-group">
                    <div class="input-group">
                        <span class="input-group-addon" id="addon{{$contact->id}}"><b>{{ $contact->id }}</b></span>
                            <input type="text" class="form-control" placeholder="Сейчас : {{ $contact->tel }}" aria-describedby="addon{{$contact->id}}">
                            <div class="input-group-btn">
                                {!! Form::submit('Сохранить', 
                                    array('class' => 'btn btn-success',
                                          'style' => 'margin-left:5px;')) !!}
                                {!! Form::submit('Удалить', 
                                    array('class' => 'btn btn-danger',
                                          'style' => 'margin-left:5px;')) !!}
                            </div>
                    </div> 
                </div>
            </div>
            {!! Form::close() !!}
        @endif
    @endforeach
</div>

@stop