@extends("layout.csunUser")

@section('content')
    @component('layout.map', ['rooms' => [ ], 'connected' => 'false' ])
    @endcomponent
<style>
    table,
    th,
    td {
        border: 1px solid black;
        padding: 10px;
    }
</style>
<div>
    <div class="container-fluid">
        <ul class="nav nav-metaphor">
            <li class="nav-item flex-fill text-center"> <a class="nav-link" href="CsunUser">Equipment</a> </li>
            <li class="nav-item flex-fill text-center"> <a class="nav-link" href=" CsunUserImage">Images</a> </li>
            <li class="nav-item flex-fill text-center"> <a class="nav-link" href="classschedules">Class Schedule</a> </li>
        </ul>
    </div>
            <h3 style="text-align: center; padding-top: 1%; padding-bottom: 1%">Class Schedule</h3>
            <table style="margin-right: auto;margin-left: auto">
                <tr>
                    <th>
                        Class Title
                    </th>
                    <th>
                        Class term
                    </th>
                    <th>
                        Class number
                    </th>
                </tr>
                @if(count($classes)>1)
                    @foreach($classes as $class)
                        <tr>
                            <td>{{$class ->title}}</td>
                            <td>{{$class ->term}}</td>
                            <td>{{$class->subject}}{{$class ->class_number}}</td>
                        </tr>
                    @endforeach
                @else
                    <P>No Data</P>
                @endif
            </table>
    </div>



@endsection