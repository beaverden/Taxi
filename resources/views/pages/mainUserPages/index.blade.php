@extends('index')
@section('content')
    
    
    
    <div class="text-center indexhover">
        <h2 style="font-family: Verdana, sans-serif">Кто мы?</h2>
        <div style="padding-bottom: 10px">{!! Html::image("http://katzglassdesign.com/blog/wp-content/uploads/2012/03/line-break.png",'',['class'=>'img-responsive center-block']) !!}</div>
        <span class="glyphicon glyphicon-ok"></span>
        Мы <a href="about">команда</a> высоко-квалифицированных таксистов
    </div>
    
    </br></br>
    
    
    </br></br>
    
    <div class="page-header text-center">
        <h2 >Где мы работаем?</h2> 
        <div style="padding-bottom: 10px">{!! Html::image("http://katzglassdesign.com/blog/wp-content/uploads/2012/03/line-break.png",'',['class'=>'img-responsive center-block']) !!}</div>
        <div><a target="_blank" href="img/map.png">{!! Html::image("img/map.png","",['class' => 'img-responsive img-thumbnail center-block']) !!}</a></div>
    </div>
    
@stop

