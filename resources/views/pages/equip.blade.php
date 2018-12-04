<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container-fluid">
        <h1>This is a list of classes</h1>
        @if(count($data)>1)
            @foreach($data as $equip)
                <div class="container">
                    <h3>
                       <a href="/equip/{{$equip->Building_Room}}">{{$equip ->Building_Room}}</a>

                    </h3>
                </div>
            @endforeach
        @else
            <P>No Data</P>
        @endif
    </div>

</body>
</html>
