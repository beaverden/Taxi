
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Сначала телефоны -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- /.Сначала телефоны -->
    
    <title>{{$title}}</title>
    
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- /.Jquery -->
    
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
    <!-- /.Bootstrap css -->
    
    {!! Html::style('stylesheets/order.css') !!}
    {!! Html::style('stylesheets/menu.css') !!}
    
    <!-- Font awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

    
    <div class="container">
        <!-- Главное меню -->
        <div>{!! Html::image('img/taxilogo.png', 'logo', array('class' => 'img-responsive center-block')) !!}</div>
        <header class="navbar navbar-inverse bs-docs-nav" role="banner">
            <div class="container">
              <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a href="./" class="navbar-brand">Такси в Москве</a>
              </div>
              <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                <ul style="font-weight: bold; font-family: Verdana, sans-serif;" 
                    class="nav navbar-nav">
                  <li>
                    <a href="about">
                        <i class="fa fa-user fa-lg"></i> О нас
                    </a>
                  </li>
                  
                  <li>
                    <a href="order">
                        <i class="fa fa-calendar fa-lg"></i> Заказать
                    </a>
                  </li>
                  
                  <li>
                    <a href="services">
                        <i class="fa fa-cab fa-lg"></i> Услуги
                    </a>
                  </li>
                  
                  <li>
                    <a href="comments">
                        <i class="fa fa-comments fa-lg"></i> Отзывы
                    </a>
                  </li>
                  
                  <li>
                    <a href="contact">
                        <i class="fa fa-phone fa-lg"></i> Контакты
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
        </header>
        <!-- /.Главное меню -->
        
        <!-- Контект -->
        <div class="container">
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
