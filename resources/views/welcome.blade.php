<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Classroom Profiles</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<div id="app">

    <topnavbar></topnavbar>
    <br>
    <equipment :equip="{{$data}}"></equipment>

    <br>
    <br>

    <div class="container">
    <div class="row">
        <div class="col-xs-6 col-md-5"><hr class="hr-metaphor"></div>
        <div class="col-xs-6 col-md-2"><h4 class="text-center">OR</h4></div>
        <div class="col-xs-6 col-md-5"><hr class="hr-metaphor"></div>
    </div>
    </div>

</div>

<script src="{{ asset('js/app.js') }}"></script>
<!-- Your Code Here -->
<div class="row">
    <div class="col-sm-12">
        <div class="container">
            <h2 class="text-md-left">Login</h2>
            <h5 class="text-md-left">View you Class Schedule with Routes</h5>
            <br>
            {!! Form::open(['route' => 'login']) !!}

            <div class="form-group">
                {!! Form::label('username', 'Username') !!}
                {!! Form::text('username', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Submit', ['class' => 'btn btn-rounded btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>

</body>

</html>