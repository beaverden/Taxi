@extends('adminPage')
@section('content')

<div class="container">
    <div class="row">
        <div class="col col-lg-6 col-lg-offset-3 span3">
            @include('flash::message')
        </div> 
    </div>
    
    <div class="row">
        <div class="col col-lg-6 col-lg-offset-3 span3 page-header">
            <b>Team</b>
            {!! Form::open(array('action' => 'AdminSettingsController@addMember', 
                                 'role' => 'form', 
                                 'enctype' => 'multipart/form-data')) !!}
                                 
                {!! Form::button('Open add form', 
                    array('class' => 'add btn btn-warning',
                          'style' => 'margin-left:5px; margin-bottom: 5px;')) !!}  
                          
                {!! Form::submit('Save', 
                    array('class' => 'btn btn-success',
                          'style' => 'margin-left:5px; margin-bottom: 5px;')) !!}
                    
                <!-- NEW MEMBER'S NAME -->
                <div style="display:none;" class="input-group newTel">   
                    <span class="input-group-addon"><b>Name</b></span>
                    {!! Form::text('name', null, 
                    array('required', 
                          'class'=>'form-control', 
                          'placeholder'=>'Enter name',
                          'maxlength' => '50')) !!}
                </div>
                <!-- /.NEW MEMBER'S NAME -->
                
                
                <!-- NEW MEMBER'S INFO -->
                <div style="display:none;" class="input-group newInfo">   
                    <span class="input-group-addon"><b>Information</b></span>
                    {!! Form::text('info', null, 
                    array('required', 
                          'class'=>'form-control', 
                          'placeholder'=>'Enter some information',
                          'maxlength' => '50')) !!}
                </div>
                <!-- /.NEW MEMBER'S INFO -->   
                
                <!-- NEW MEMBER'S PHOTO -->
                <div style="display:none;" class="input-group newPhoto">   
                    <span class="input-group-addon"><b>Photo</b></span>
                    {!! Form::file('photo', 
                    array('required', 
                          'class'=>'form-control')) !!}
                </div>
                <!-- /.NEW MEMBER'S PHOTO -->
                
            {!! Form::close() !!}        
        </div>
       
        
    </div>
    @foreach ($crew as $member) 
        <div class="row">
            {!! Form::open(array('action' => 'AdminSettingsController@saveMember', 
                                 'role' => 'form', 
                                 'enctype' => 'multipart/form-data')) !!}
                                 
            {!! Form::hidden('id', $member->id) !!}
            <div style="padding-bottom: 10px; " class="media col col-lg-6 spa3 col-lg-offset-3">
                <div class="media-left">
                    <img class="media-object " src="{{$member->photo}}">
                </div>
              <div class="media-body">
                <h4 class="media-heading">
                <!-- MEMBER NAME -->
                    {!! Form::text('name', null, 
                    array('class'=>'form-control', 
                          'placeholder'=>'Now : '.$member->name,
                          'maxlength' => '50')) !!}
                </h4>
                <!-- MEMBER /.NAME -->
                
                <!-- MEMBER INFO -->
                    {!! Form::text('info', null, 
                        array('class'=>'form-control', 
                              'placeholder'=>'Now : '.$member->info,
                              'maxlength' => '50')) !!}
                <!-- /.MEMBER INFO -->
                
                
                <!-- MEMBER PHOTO -->
                {!! Form::file('photo', 
                    array( 
                          'class'=>'form-control')) !!}              
                <!-- /.MEMBER PHOTO -->
                
                {!! Form::submit('Save', 
                    array('class' => 'btn btn-success',
                          'style' => 'margin-right:5px; margin-top: 5px;')) !!}  
                          
                {!! Form::button('Delete', 
                    array('class' => 'delete btn btn-danger',
                          'style' => 'margin-right: 5px; margin-top: 5px;',
                          'data-id' => $member->id)) !!}
                          

              </div>
            </div>
            {!! Form::close() !!}
        </div>
    @endforeach
</div>
    {!! Html::script('js/adminCrew.js') !!}

@stop