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
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-md-5"><hr class="hr-metaphor"></div>
                <div class="col-xs-6 col-md-2"><h4 class="text-center">OR</h4></div>
                <div class="col-xs-6 col-md-5"><hr class="hr-metaphor"></div>
            </div>
        </div>
    <br>
</div>

<script src="{{ asset('js/app.js') }}"></script>
<!-- Your Code Here -->
<div class="row">
    <div class="col-sm-12">
        <div class="container">
            <h3 class="text-md-left">Login to View Schedule</h3>
            <h6 class="text-md-left">(View your Class Schedule with Routes)</h6>
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
            <br>
            {!! Form::submit('Submit', ['class' => 'btn btn-rounded btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>

<footer class="footer-metaphor">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5">
                <div class="row mb-3 mb-md-0">
                    <div class="col-12 col-md-3">
                        <img class="d-block mx-auto mx-md-0 img-fluid footer-metaphor__emblem mb-3 mb-md-0" src="//s3-us-west-2.amazonaws.com/csun-metalab/metaphor/dist/img/csun-emblem.svg" alt="CSUN Emblem">
                    </div>
                    <div class="col-12 col-md-9">
                        <h6>META+LAB </h6>
                        <div>
                            © California State University, Northridge <br>
                            18111 Nordhoff Street, Northridge, CA 91330 <br>
                            Phone: <a href="#">(818) 677-1200</a> / <a href="//www.csun.edu/contact" target="csun">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-7">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="mb-2 mb-lg-1">
                            <a href="//www.csun.edu/emergency/" target="csun">Emergency Information</a>
                        </div>
                        <div class="mb-2 mb-lg-1">
                            <a href="//www.csun.edu/afvp/university-policies-procedures/" target="csun">University Policies &amp; Procedures</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 pl-0">
                        <div class="mb-2 mb-lg-1">
                            <a href="//www.csun.edu/sites/default/files/900-12.pdf" target="csun">Terms and Conditions for Use</a>
                        </div>
                        <div class="mb-2 mb-lg-1">
                            <a href="//www.csun.edu/sites/default/files/500-8025.pdf" target="csun">Privacy Policy</a>
                        </div>
                        <div class="mb-2 mb-lg-1">
                            <a href="//www.csun.edu/it/document-viewers" target="csun">Document Reader</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 px-0">
                        <div>
                            <a href="//www2.calstate.edu" target="csun">California State University</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-metaphor__subfooter mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img class="footer-metaphor__logo mb-3" src="//s3-us-west-2.amazonaws.com/csun-metalab/metaphor/dist/img/metalab-logo.svg" alt="META+LAB Logo">
                    <div class="mb-2 mb-md-0">
                        <a href="//www.metalab.csun.edu" target="csun">metalab.csun.edu</a>
                    </div>
                </div>
                <div class="offset-md-6 col-md-4 align-self-center">
                    <div class="text-center text-md-right">
                        Explore. Learn. Go Beyond.
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>

</html>