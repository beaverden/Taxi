@extends('adminPage')
@section('content')

<div class="container">
    <div class="row">
        <div class="col col-lg-6 col-lg-offset-3 span3 list-group  text-center">
            <a href="/admin/general/password" class="list-group-item">Change password</a>
            <a href="/admin/general/changeContacts" class="list-group-item">Edit contact list</a>
            <a href="/admin/general/changeCrew" class="list-group-item">Edit team list</a>
            <a href="/admin/general/blocked" class="list-group-item">Blacklist</a>
        </div>
    </div>
</div>

@stop