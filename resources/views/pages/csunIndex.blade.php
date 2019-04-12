@extends("layout.csunUser")

@section("content")
    <div id="app">
        <br>
        <user-equipment :equip="{{$data}}"></user-equipment>
    </div>
@endsection