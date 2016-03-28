@extends('adminPage')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
            <div class="form-group">@include('flash::message')</div>
            {!! Form::open(array('action' => 'AdminSettingsController@changePassword')) !!}
            <!-- Old Password -->
            <div class="form-group">
                {!! Form::label('Old password') !!}
                {!! Form::password('oldpassword', 
                    array('required', 
                          'class' => 'form-control', 
                          'placeholder' => 'Enter the old password',
                          'maxlength' => '50')) !!}
            </div>
            <!-- /. Old Password -->

            <!-- New Password -->
            <div class="form-group">
                {!! Form::label('New password') !!}
                {!! Form::password('newpassword', 
                    array('required', 
                          'class' => 'form-control', 
                          'placeholder' => 'Enter the new password',
                          'maxlength' => '50')) !!}
            </div>
            <!-- /. New Password -->
            
            <!-- Repeat New Password -->
            <div class="form-group">
                {!! Form::label('Repeat the new password') !!}
                {!! Form::password('rnewpassword', 
                    array('required', 
                          'class' => 'form-control', 
                          'placeholder' => 'New password',
                          'maxlength' => '50')) !!}
            </div>
            <!-- /. Repeat New Password -->
            <div class="form-group">
                {!! Form::submit('Submit', 
                  array('class' => 'btn btn-success')) !!}
            </div>

            {!! Form::close() !!}
        <!-- /.login form -->
        </div>
    </div>
</div>

@stop