/**
 * Created by PhpStorm.
 * User: nikitha
 * Date: 12/10/2018
 * Time: 10:00 AM
 */

@extends("layout.app")

@section('content')

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
{{--
            -------------3D images--------------
--}}
            <div>

                <a href="{{url('http://facplan-arcgisweb1.csun.edu/360/'.$building.'/'.$roomNumber.'/')}}"> 3D</a>
            <img src="JD2212 door.JPG">
                <script>
                    pannellum.viewer('panorama1', {
                        "type": "equirectangular",

                        "panorama": {{$room}}".JPG",

                        "autoLoad": true,

                        "autoRotate": 4
                    });

                </script>

            </div>
        </div>
    </div>

@endsection