{{-- Menu and scripts template for Admin pages --}} 

<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- /.Jquery -->
     
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
    <!-- /.Bootstrap css -->
    
    <!-- Font awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
    {!! Html::style('stylesheets/menu.css') !!}
</head>
<body>

    
    <div class="container">
        <!-- Main menu -->
        <div class="navbar navbar-inverse bs-docs-nav" role="banner">
            <div class="container-fluid">
              <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a href="/admin" class="navbar-brand">Диспетчер</a>
              </div>
              <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                <ul style="font-weight: bold; font-family: Verdana, sans-serif;" 
                    class="nav navbar-nav">
        
                  <li>
                    <a href="/admin/orders">
                        <i class="fa fa-calendar fa-lg"></i> Заказы
                    </a>
                  </li>

                  <li>
                    <a href="/admin/comments">
                        <i class="fa fa-comments fa-lg"></i> Отзывы
                    </a>
                  </li>

                </ul>
              </nav>
        </div>
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

