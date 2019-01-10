/**
 * Created by PhpStorm.
 * User: nikitha
 * Date: 12/10/2018
 * Time: 10:00 AM
 */

@extends("layout.app")

@section('content')

    <div class="container">

        {!! Form::open(['action'=> 'ImageController@store', 'method'=>'POST']) !!}
        <div class="form-group" >
            {{Form::label('room', 'Room')}}
            {{Form::text('room', '', ['class'=> 'form-control', 'placeholder' => 'Name of Room'])}}
        </div>

        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>

@endsection