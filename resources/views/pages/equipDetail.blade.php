@extends("layout.app")

@section('content')
    <div class="table--responsive">

        <table class="table table--striped table--bordered table--padded table--hover">
            <thead>
            <tr>
                <th>Equipment</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Seat Count</td>
                <td>{{$data->Station_Count}}</td>
            </tr>
            <tr>
                <td>Seat Type</td>
                <td>{{$data->Seating}}</td>
            </tr>
            <tr>
                <td>Large_Lecture_Hall_or_Classroom</td>
                <td>{{$data->Large_Lecture_Hall_or_Classroom}}</td>
            </tr>
            <tr>
                <td>Windows</td>
                <td>{{$data->Windows}}</td>
            </tr>
            <tr>
                <td>chalk or white board </td>
                <td>{{$data->Chalk_Whiteboard_Both}}</td>
            </tr>
            <tr>
                <td>Video Projector Model</td>
                <td>{{$data->Projector_Model}}</td>
            </tr>
            <tr>
                <td>Internal DVD player located in PC</td>
                <td>{{$data->Internal_DVD_player_located_in_PC}}</td>
            </tr>
            <tr>
                <td>Stand Alone DVD VCR Player</td>
                <td>{{$data->Stand_Alone_DVD_VCR_Player}}</td>
            </tr>
            <tr>
                <td>UVN</td>
                <td>{{$data->UVN}}</td>
            </tr>
            <tr>
                <td>Airserver</td>
                <td>{{$data->Airserver_Y_N}}</td>
            </tr>
            <tr>
                <td>HDMI</td>
                <td>{{$data->HDMI_Y_N}}</td>
            </tr>
            <tr>
                <td>Apple TV</td>
                <td>{{$data->Apple_TV_Y_N}}</td>
            </tr>

            </tbody>
        </table>
    </div>
    <!--<div>
         <h1>{{$data->Building_Room}}</h1>

     </div>
    -->

@endsection