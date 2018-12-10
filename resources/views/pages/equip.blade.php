@extends("layout.app")

@section('content')
    <div >
        <div class="container-fluid">
            <h3>All classes</h3>
            <form>
                <select name="list" id="list" accesskey="target">
            @if(count($data)>1)
                @foreach($data as $equip)
                    <div class="container">
                        <h3>
                            <option value="/equip/{{$equip->Building_Room}}">{{$equip ->Building_Room}}</option>

                        </h3>
                    </div>
                @endforeach
            @else
                <P>No Data</P>
            @endif
                </select>
                <input type="button" value="GO" onclick="goToNewPage()"/>
            </form>
        </div>
    </div>
@endsection
