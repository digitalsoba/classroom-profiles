
@extends("layout.app")

@section('content')

    <div class="container">
        <h1>Find a Classroom</h1>

        {!! Form::open(['action'=> 'ImageController@store', 'method'=>'POST']) !!}
        <div class="form-group" >
            {{Form::label('room', 'Room')}}
            {{Form::text('room', '', ['class'=> 'form-control', 'placeholder' => 'Room'])}}

        </div>

        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}

    </div>


@endsection