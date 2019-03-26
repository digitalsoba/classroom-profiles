@extends("layout.app")

@section('content')
<div class="container">
    <div class="row">
        <h2>Please Login</h2>
    </div>
        {!! Form::open(['route' => 'login']) !!}
        <div class="form-group">
            {!! Form::label('username', 'Username') !!}
            {!! Form::text('username', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Submit', ['class' => 'btn btn-rounded btn-primary']) !!}
        {!! Form::close() !!}
    @if (session()->has('message')) <div class="alert alert-danger">{!! session('message') !!}</div>
    @endif
</div>
@endsection