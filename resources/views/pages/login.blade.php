@extends("layout.app")

@section('content')
<div class="container">
    <div class="row">
        <h2>Please login</h2>
    </div>
        {!! Form::open(['route' => 'login']) !!}

        <div class="form-group">
            {!! Form::label('username', 'Username') !!}
            {!! Form::text('username', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::text('password', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('Submit', ['class' => 'btn btn-rounded btn-primary']) !!}
        {!! Form::close() !!}
</div>


@endsection