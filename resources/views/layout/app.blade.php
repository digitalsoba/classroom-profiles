<!-- This is the comment layout for every pages on the website -->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <script>window.Laravel={csrfToken:'{{csrf_token()}}'}</script>
    <!-- Icons -->
    <link rel="icon" href="//www.csun.edu/sites/default/themes/csun/favicon.ico" type="image/x-icon">
    <script>try { Typekit.load(); } catch (e) { }</script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>Classroom Profile</title>

    <!--<script type="text/javascript">
        function goToNewPage() {
            var url = document.getElementById('list').value;
            if (url != 'none') {
                window.location = url;
            }
        }
    </script>-->
</head>
<body>
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
    <topnavbar>
        <div class="container">
          {!! Form::open(['url' => '/login']) !!}

            <div class="form-group">
                {!! Form::label('username', 'Username') !!}
                {!! Form::text('username', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            <br>
            {!! Form::submit('Submit', ['class' => 'btn btn-rounded btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </topnavbar>
</div>
    <div class="container-fluid">
        <div class="row">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=csun&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
        </div>
    </div>

    @include('layout.botnavbar')

    @yield("content")

    <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js" integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy"
        crossorigin="anonymous"></script>
    @include("layout.footer")

    <script src="{{ asset('js/app.js') }}"></script>
</body>


</html>

