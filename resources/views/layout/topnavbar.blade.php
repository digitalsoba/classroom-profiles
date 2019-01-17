
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

        <ul class="primary-nav__links">
            <li><a class="primary-nav__link active" href="classLocation.html">Classroom</a></li>
            <li><a class="primary-nav__link" href="parking.html">Parking</a></li>
            <li><a class="primary-nav__link" href="food.html">Food</a></li>
        </ul>
    </div>
</nav>