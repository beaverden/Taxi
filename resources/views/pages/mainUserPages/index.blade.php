@extends('index')
@section('content')
    
    
    
    <div class="text-center indexhover">
        <h2 style="font-family: Verdana, sans-serif">Who we are?</h2>
        <div style="padding-bottom: 10px">{!! Html::image("http://katzglassdesign.com/blog/wp-content/uploads/2012/03/line-break.png",'Line Break Image',['class'=>'img-responsive center-block']) !!}</div>
        <span class="glyphicon glyphicon-ok"></span>
        We are <a href="about">a team</a> of quallified taxi drivers
    </div>
    
    </br></br>
    
    
    </br></br>
    
    <div class="page-header text-center">
        <h2 >Where do we work?</h2> 
        <div style="padding-bottom: 10px">{!! Html::image("http://katzglassdesign.com/blog/wp-content/uploads/2012/03/line-break.png",'Lcations where we drive',['class'=>'img-responsive center-block']) !!}</div>
        <div><a target="_blank" href="img/map.png">{!! Html::image("img/map.png","",['class' => 'img-responsive img-thumbnail center-block']) !!}</a></div>
    </div>
    
@stop

