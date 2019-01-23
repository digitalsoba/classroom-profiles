<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
          integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
          crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
            integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
            crossorigin=""></script>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div id="map"></div>
    <?php
        //check that there are rooms in the array to map
        if(!is_null($rooms) && sizeof($rooms) > 0 && !is_null($rooms[0]))
        {
            //load the environment variable, confirm it is available
            $mapBoxKey = env('MAPBOX_API_KEY');
            if($mapBoxKey == null)
            {
                echo 'Mapbox API key is missing';
            }
            else
            {
                //Calls leaflet to load the area's map data and put it on screen
                echo '<script type="text/javascript">',
                    'start("'.env('MAPBOX_API_KEY','Mapbox API Key is missing').'");',
                '</script>';
                $roomInfo = [];
                foreach ($rooms as $room)
                {
                    //An empty string was given as the parameter, doesn't check the room
                    if($room == "")
                    {
                        echo "Expects a room as a parameter";
                    }
                    else
                    {
                        try
                        {
                            //Checks if the given room follows the pattern for a room at CSUN 2-4 letters,
                            //any number of spaces (the api accepts this), 3 or 4 numbers, sometimes followed
                            //by a letter. META+LAB is also a valid room, so it needs it's own special checks
                            //"+" is a reserved URI character so it needs to be replaced with its encoding equivalent
                            $room = str_replace("+", "%2B", $room);
                            if(preg_match("{^[A-z]{2,4} *\d{3,4}[A-z]?$}", $room) || strtoupper($room) == 'META%2BLAB')
                            {
                                //Creates an Http Client using Guzzle to make our API requests
                                //see http://docs.guzzlephp.org for more details on the client
                                $client = new \GuzzleHttp\Client();
                                //calls the Waldo api, asking for information on the given room and stores the result
                                //this is a synchronous call, can also be implemented asynchronously
                                $result = $client->request('GET',
                                    'https://api.metalab.csun.edu/waldo/1.0/rooms?room='.$room,
                                    ['verify' => false]);
                                //The status code 200 is expected if we call the api correctly with a valid room
                                if($result->getStatusCode() == 200)
                                {
                                    //decodes the JSON received from Waldo, and stores the rooms array
                                    $resultRooms = json_decode($result->getBody())->{'rooms'};
                                    //Checks if the room array has exactly 1 room in it
                                    //this seems to be the expected result for a successful call
                                    if(count($resultRooms) == 1)
                                    {
                                        //puts the room name and it's latitude and longitude on screen
                                        $foundRoom = $resultRooms[0];
                                        echo '<li>'.$room.'</li>';
                                        echo '('.$foundRoom->latitude.', '.$foundRoom->longitude.')';

                                        //add the room's info into an array, which will be used to draw the route
                                        array_push($roomInfo, [
                                            $foundRoom->latitude,
                                            $foundRoom->longitude,
                                            $foundRoom->room_number,
                                            $foundRoom->building_name]);
                                    }
                                }
                            }
                            else
                            {
                                //The check of the room failed, the api has not been called.
                                echo "Room is invalid.";
                            }
                        }
                        catch (\GuzzleHttp\Exception\BadResponseException $e)
                        {
                            //Waldo throws a 500 when passed an invalid room, like JD9999
                            //Though it could also be given for other errors
                            echo 'Room not found';
                        }
                        catch (Exception $e)
                        {
                            //Something else went wrong, can expand checks for other common errors if waldo gives them
                            //TODO: log the exception
                            echo 'Something went wrong';
                        }
                    }
                }
                //for the correctly found rooms, converts the result to JSON and draws the markers,
                //draws the route if connected is true
                $roomJSON = json_encode($roomInfo);
                echo '<script type="text/javascript">',
                    'addMultiplePoints('.$roomJSON.', '.$connected.');',
                '</script>';
            }
        }
    ?>
</body>
</html>