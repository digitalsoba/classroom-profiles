@extends("layout.app")

@section('content')
    <div id="app">
        <br>
        <equipment :equip="{{$data}}"></equipment>
    </div>

@endsection