@extends('adminPage')
@section('content')

<div class="container">
    <div class="form-group">@include('flash::message')</div>
    <!-- MAIN NUMBER -->
    <div class="row">
        <div class="col col-lg-6 col-lg-offset-3 span3 list-group">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><b>Основной</b></span>
                    <input class="form-control" id = "input1" type="text"  placeholder="Сейчас : {{ $contacts[0]->tel }}" aria-describedby="basic-addon1">
                   
                    <div class="input-group-btn">
                         <button style="margin-left:5px;" class="save btn btn-success" data-id="{{ 1 }}"  >Сохранить</button>
                    </div>
            </div> 
        </div>
    </div>
    <!-- /.MAIN NUMBER -->
    
    <div class="row">
        <div class="col col-lg-6 col-lg-offset-3 span3 page-header">
            <b>Другие контакты</b>
            <button style="margin-left:5px; margin-bottom: 5px;" class="add btn btn-warning">
            Добавить
            </button>
            <button style="margin-left:5px; margin-bottom: 5px;" class="savenew btn btn-success">
            Сохранить
            </button>
            <div style="display:none;" class="input-group newTel">
                <span class="input-group-addon"><b>Телефон</b></span>
                <input class="form-control" id="addTel" type="text" >
            </div>
            
            <div style="display:none;" class="input-group newInfo">
                <span class="input-group-addon"><b>Информация</b></span>
                <input class="form-control" id="addInfo" type="text" >
            </div>
            
        </div>
       
        
    </div>
    @foreach ($contacts as $contact) 
        @if ($contact->id > 0)
            <div class="row fluid">
                <div class="col col-lg-6 col-lg-offset-3 span3 list-group">
                    <div class="input-group">
                        <span class="input-group-addon" id="addon{{ $contact->id }}"><b>{{ $contact->id }}</b></span>
                            <input class="form-control" id="tel{{ $contact->id }}" type="text"  placeholder="Сейчас : {{ $contact->tel }}" aria-describedby="addon{{$contact->id}}">
                            <input class="form-control" id="info{{ $contact->id }}" type="text"  placeholder="Сейчас : {{ $contact->info }}" aria-describedby="addon{{$contact->id}}">
                            <div class="input-group-btn">
                                <button style="margin-left:5px;" class="save btn btn-success" data-id="{{ $contact->id }}" >
                                    Сохранить
                                </button>
                                <button style="margin-left:5px;" class="delete btn btn-danger" data-id="{{ $contact->id }}">
                                    Удалить
                                </button>
                            </div>
                    </div> 
                </div>
            </div>
        @endif
    @endforeach
</div>
    {!! Html::script('js/adminContacts.js') !!}

@stop