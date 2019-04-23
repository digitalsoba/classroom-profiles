@extends("layout.csunUser")

@section('content')
    <style>
        table,th,td{
            border: 1px solid black;
            padding: 10px;
        }
    </style>
    <div >
        <div class="container-fluid">
            <h3>Class Schedule</h3>
            <table>
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
    </div>



@endsection