@extends("layout.csunUser")

@section("content")

    @component('layout.map', ['rooms' => [ ], 'connected' => 'false' ])
    @endcomponent

    <div id="app">
        <br>
        <user-equipment :equip="{{$data}}"></user-equipment>
    </div>
@endsection