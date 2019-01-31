
@extends("layout.app")

@section('content')

    <h1>These are the Images for Room: {{$room}} </h1>

    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="">
                    <img src="https://cdn.metalab.csun.edu/classrooms/EU103/front.jpg" alt="Lights" style="width:100%">
                    <div class="caption">
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="">
                    <img src="https://cdn.metalab.csun.edu/classrooms/EU103/exit.jpg" alt="Nature" style="width:100%">
                    <div class="caption">
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="">
                    <img src="https://cdn.metalab.csun.edu/classrooms/EU103/media.jpg" alt="Fjords" style="width:100%">
                    <div class="caption">
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection
