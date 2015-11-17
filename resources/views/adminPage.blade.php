{{-- Menu and scripts template for Admin pages --}} 

<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <META HTTP-EQUIV="refresh" CONTENT="60">
    
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- /.Jquery -->
    
    <!-- CSRF defense -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <!-- /.CSRF defense -->
    
    <!-- Phones first -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- /.Phones first -->
    
    <title>{{$title}}</title>
    

     
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
    <!-- /.Bootstrap css -->
    
    <!-- Font awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
    {!! Html::style('stylesheets/adminMenu.css') !!}
</head>
<body>

    
    <div class="container">
        <!-- Main menu -->
        <div class="row-fluid navbar menu">
            <a href="">
                <div class="col col-lg-2 col-lg-offset-2 menuitem">
                    <i class="fa fa-refresh fa-lg"></i> Обновить
                </div>
            </a>
            <a href="/admin/orders">
                <div class="col col-lg-2 dropdown menuitem ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-car fa-lg"></i> Заказы<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="/admin/orders">Активные</a></li>
                          <li><a href="/admin/orders/done">Выполненные</a></li>
                          <li><a href="/admin/orders/erased">Удаленные</a></li>
                        </ul>
                    
                </div>
            </a>
            <a href="/admin/comments">
                <div class="col col-lg-2 menuitem">
                    <i class="fa fa-comments fa-lg"></i> Отзывы
                </div>
            </a>
            <a href="/admin/general">
                <div class="col col-lg-1 menuitem" title="Общие настройки">
                    <i class="fa fa-cog fa-lg"></i>
                    <span class="hidden-lg"> Общее<span>
                </div>
            </a>
            <a href="/admin/exit">
                <div class="col col-lg-1 span4 menuitem" title="Выйти">
                    <i class="fa fa-chain-broken fa-lg"></i>
                    <span class="hidden-lg"> Выйти<span>
                </div>
            </a>
        </div>
        <!-- /.Main menu -->
        
        <!-- Content -->
        <div>

            @yield('content')
        </div>
        </br> </br> </br>
    </div>
    <!-- /.Content -->
        
    <!-- Bootstrap js-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <!-- /.Bootstrap js-->
    

</body>
</html>

