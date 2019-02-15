<nav class="navbar navbar-metaphor navbar-metaphor--light navbar-expand-md">
    <a class="navbar-brand" href="/">
        <span class="sr-only">CSUN Logo</span>
        <span class="navbar-brand__subbrand">
            Classroom Profiles
        </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup2"
        aria-controls="navbarNavAltMarkup2" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup2">
        <div class="navbar-nav text-center">
            <a class="nav-item nav-link" href="/">Home</a>
            <a class="nav-item nav-link" href="#">Classrooms</a>
            <a class="nav-item nav-link" href="#">Parking</a>
            <a class="nav-item nav-link" href="#">Food</a>
            @if (Route::has('login'))
            @auth
            <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
            <a href="{{ route('logout') }}" class="nav-item nav-link active">Log Out</a>
            @else
            <a href="{{ route('login') }}" class="nav-item nav-link active">Log In</a>
            @endauth
            @endif
        </div>
    </div>
</nav>