
@extends("layout.csunUser")

@section('content')

    @component('layout.map', ['rooms' => [ ], 'connected' => 'false' ])
    @endcomponent
    <div class="container">
       <!-- <h3>Find a Classroom</h3>

        {!! Form::open(['action'=> 'ImageCsunUserController@userstore', 'method'=>'POST']) !!}

        <div class="form-group" >
            {{Form::text('room', '', ['class'=> 'form-control', 'placeholder' => 'Room'])}}
        </div>

        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
        -->
         <div id="app">
             <user-equipment :equip="{{$data}}"></user-equipment>
        </div>

    </div>


@endsection