<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="/docs/4.0/assets/js/vendor/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="/docs/4.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<nav class="primary-nav">
    <div class="container">
        <div class="primary-nav__mobile">
            <div class="primary-nav__btn">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <a class="primary-nav__brand"><span class="sr-only">California State University, Northridge (CSUN)</span>
            </a>
            <a href="" class="primary-nav__sub-brand">Classroom Profiles</a>
            {{--<a href="{{ route('login') }}" class="primary-nav__sub-brand nav-item">Log In</a>--}}
            @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="primary-nav__sub-brand nav-item">Log In</a>

                    @endauth
            @endif

        </div>

        <!-- Button to Open the Modal -->


        <ul class="primary-nav__links">
            <li><a class="primary-nav__link active" href="classLocation.html">Classroom</a></li>
            <li><a class="primary-nav__link" href="parking.html">Parking</a></li>
            <li><a class="primary-nav__link" href="food.html">Food</a></li>
        </ul>


    </div>
</nav>
<div>


</div>