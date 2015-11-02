
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Сначала телефоны -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- /.Сначала телефоны -->
    
    <title>{{$title}}</title>
    
    {!! Html::style('stylesheets/order.css') !!}
    {!! Html::style('stylesheets/hover.css') !!}
    {!! Html::style('stylesheets/sidebar.css') !!}
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- /.Jquery -->
    
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
    <!-- /.Bootstrap css -->
    
    <!-- Font awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

    
    <div class="container">
        <!-- Главное меню -->
        <nav class="navbar navbar-inverse sidebar navbar-fixed-bottom collapse in" role="navigation">
            

            <div class="nav-side-menu">
                <div class="brand">Taxi</div>
                <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

                    <div class="menu-list">

                        <ul id="menu-content" class="menu-content collapse out menuhover">
                             <li>
                                <a href="about">
                                <i class="fa fa-user fa-lg"></i> О нас
                                </a>
                              </li>

                             <li>
                              <a href="#">
                              <i class="fa fa-users fa-lg"></i> Заказать
                              </a>
                            </li>
                            
                            <li>
                              <a href="#">
                              <i class="fa fa-cab fa-lg"></i> Услуги
                              </a>
                            </li>
                            
                            <li>
                              <a href="#">
                              <i class="fa fa-comments fa-lg"></i> Отзывы
                              </a>
                            </li>
                            
                            <li>
                              <a href="#">
                              <i class="fa fa-phone fa-lg"></i> Контакты
                              </a>
                            </li>
                        </ul>
                 </div>
            </div>
        </nav>
        <!-- /.Главное меню -->
        
        <!-- Контект -->
        <div class="main container">
            <div>{!! Html::image('img/taxilogo.png', 'logo', array('class' => 'img-responsive center-block')) !!}</div>
            <div class="text-center">
                <div style="padding-bottom : 8px;">
                    <!-- Кнопка контактов -->
                    <a style="text-decoration:none;" href='contacts.php'>
                    <!-- /.Кнопка контактов -->

                        <span style="font-size: 18px; " class="label label-success" >
                        <span class="glyphicon glyphicon-earphone"></span> Позвоните нам</span>  
                    </a> 
                </div>
                <div >
                <!-- Номер телефона и флаг -->
                <span style="font-size:18px;" class="badge">
                    <a style="text-decoration: none; color: #222" href="tel:{{ $number }}">{{ $number }}</a>
                </span>
                {!! Html::image('img/ru.png', 'ruflag', array('class' => 'img')) !!}
                <!-- /. Номер телефона и флаг -->
                </div>
            </div>

            </br>

            @yield('content')
        </div>
        </br> </br> </br>
    </div>
    <!-- /.Контект -->
        
    <!-- Bootstrap js-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <!-- /.Bootstrap js-->
    

    
    <!--Sidebar js -->
    <script src="js/sidebar.js" type="text/javascript"></script>
    <!-- /.Sidebar js -->
</body>
</html>
