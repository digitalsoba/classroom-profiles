<div class="container-fluid">
    <nav class="navbar navbar-metaphor navbar-metaphor--light navbar-expand-md">
            <a class="navbar-brand" href="{{route('logout')}}">
                <span class="sr-only">CSUN Logo</span>
                <span class="navbar-brand__subbrand">
                    Classroom Profiles
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup2" aria-controls="navbarNavAltMarkup2" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup2">
                <div class="navbar-nav text-center">
                    <!--<a class="nav-item nav-link" href='login'>Login</a>-->
                    <a class="btn btn-danger" href="{{route('logout')}}">Logout</a>
                </div>
            </div>
 </nav>
</div