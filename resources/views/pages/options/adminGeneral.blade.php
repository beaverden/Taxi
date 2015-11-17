@extends('adminPage')
@section('content')

<div class="container">
    <div class="row">
        <div class="col col-lg-6 col-lg-offset-3 span3 list-group  text-center">
            <a href="/admin/general/password" class="list-group-item">Поменять пароль</a>
            <a href="/admin/general/contacts" class="list-group-item">Поменять список контактов</a>
            <a href="/admin/general/crew" class="list-group-item">Поменять список команды</a>
            <a href="/admin/general/blocked" class="list-group-item">Список заблокированных</a>
        </div>
    </div>
</div>

@stop