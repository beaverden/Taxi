<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
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

</head>
<body>
    <div style="padding-top : 20%" class="row">
        <!-- login form -->
        <div class="col-lg-4 col-lg-offset-4 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
            <div class="form-group">@include('flash::message')</div>
            {!! Form::open(array('action' => 'HomeController@admin')) !!}
            <!-- Password -->
            <div class="form-group">
                {!! Form::label('Пароль') !!}
                {!! Form::text('password', null, 
                    array('required', 
                          'class'=>'form-control', 
                          'placeholder' => 'Пароль',
                          'maxlength' => '50')) !!}
            </div>
            <!-- Password -->

            <!-- Captcha -->
            <div class="form-group " >
                {!! Captcha::img(); !!}
            </div>
            <div class="form-group " >
                {!! Form::text('captcha', null, 
                    array('required',
                          'class' => 'form-control')) !!}

            </div>   
            <!-- /.Captcha -->

            <div class="form-group">
                {!! Form::submit('Войти', 
                  array('class' => 'btn btn-success')) !!}
            </div>

            {!! Form::close() !!}
        <!-- /.login form -->
        </div>
    </div>
    
    <!-- Bootstrap js-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <!-- /.Bootstrap js-->
</body>

