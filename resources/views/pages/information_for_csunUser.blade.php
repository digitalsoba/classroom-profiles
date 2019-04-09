@extends("layout.guestPage")

@section('content')



    <!--following is map space holder-->
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
    <!-- following is  nav bar-->
    <div class="container nav-fill">
        <ul class="nav nav-metaphor">
            <li class="nav-item flex-fill text-center "> <a class="nav-link active " href="/CsunUser/{{$data['roomData']->Building_Room}}">Equipment</a> </li>
            <li class="nav-item flex-fill text-center"> <a class="nav-link" href="/CsunUserImage/{{$data['roomData']->Building_Room}}">Images</a> </li>
            <li class="nav-item flex-fill text-center"> <a class="nav-link" href="/CsunUserImage/{{$data['roomData']->Building_Room}}">Route</a> </li>
        </ul>
    </div>
    <!-- following is equipment data table-->

    <div class="container">
        <table class="table table--responsive table--striped table--bordered table--padded table--hover">
            <thead>
            <tr>
                <th>Equipment</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Classroom Name</td>
                <td>{{$data['roomData']->Building_Room}}</td>
            </tr>
            <tr>
                <td>Mount Key</td>
                <td>{{$data['roomData']->Mount_Key}}</td>
            </tr>
            <tr>
                <td>Seat Count</td>
                <td>{{$data['roomData']->Station_Count}}</td>
            </tr>
            <tr>
                <td>Large_Lecture Hall or Classroom</td>
                <td>{{$data['roomData']->Large_Lecture_Hall_or_Classroom}}</td>
            </tr>
            <tr>
                <td>Video Projector Model</td>
                <td>{{$data['roomData']->Projector_Model}}</td>
            </tr>
            <tr>
                <td>Projector Screen Type</td>
                <td>{{$data['roomData']->Projector_Screen_Type_Manual_Motorized}}</td>
            </tr>
            <tr>
                <td>Projector Serial</td>
                <td>{{$data['roomData']->Projector_Serial}}</td>
            </tr>
            <tr>
                <td>Internal DVD player located in PC</td>
                <td>{{$data['roomData']->Internal_DVD_player_located_in_PC}}</td>
            </tr>
            <tr>
                <td>Number of Screens</td>
                <td>{{$data['roomData']->Number_of_Screens}}</td>
            </tr>
            <tr>
                <td>Screen Size </td>
                <td>{{$data['roomData']->Screen_Size_4_3_16_9}}</td>
            </tr>
            <tr>
                <td>Airserver</td>
                <td>{{$data['roomData']->Airserver_Y_N}}</td>
            </tr>
            <tr>
                <td>HDMI</td>
                <td>{{$data['roomData']->HDMI_Y_N}}</td>
            </tr>
            <tr>
                <td>Apple TV</td>
                <td>{{$data['roomData']->Apple_TV_Y_N}}</td>
            </tr>
            <tr>
                <td>Support Contact Number</td>
                <td>{{$data['roomData']->Support_Contact_Number}}</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div id="app">
        <equipmentdata :equip="{{$data['mainData']}}"></equipmentdata>
    </div>


@endsection