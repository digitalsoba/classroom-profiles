<!DOCTYPE html>

<html>
<head>
    <title></title>
</head>
<body>
    <h1>Map stuff</h1>
    @foreach($rooms as $room)
        <li>{{$room}}</li>
        <?php
        //An empty string was given as the parameter, doesn't check the room
        if($room == "")
        {
           echo "Expects a room as a parameter";
        }
        else
        {
            try
            {
                //Checks if the given room follows the pattern for a room at CSUN,
                //2-4 letters, any number of spaces (the api accepts this), 3 or 4 numbers, sometimes followed by a letter.
                //META+LAB is also a valid room, so it needs it's own special checks
                //"+" is a reserved URI character so it needs to be replaced with its percent encoding equivalent
                $room = str_replace("+", "%2B", $room);
                if(preg_match("{^[A-z]{2,4} *\d{3,4}[A-z]?$}", $room) || strtoupper($room) == 'META%2BLAB')
                {

                    //Creates an Http Client using Guzzle to make our API requests
                    //see http://docs.guzzlephp.org for more details on the client
                    $client = new \GuzzleHttp\Client();
                    //calls the Waldo api, asking for information on the given room and stores the the result
                    //this is a synchronous call, can also be implemented asynchronously
                    $result = $client->request('GET', 'https://api.metalab.csun.edu/waldo/1.0/rooms?room='.$room,
                    //THIS IS A WORKAROUND, we need a solution for calling the api without setting verify to false
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
                            //puts the room's latitude and longitude on screen
                            $foundRoom = $resultRooms[0];
                            echo '('.$foundRoom->latitude.', '.$foundRoom->longitude.')';
                        }
                    }
                }
                else
                {
                    //The pre-check of the room failed, the api has not been called.
                    echo "Room is invalid.";
                }
            }
            catch (\GuzzleHttp\Exception\ClientException $e)
            {
                //Waldo throws a 500 when passed an invalid room, like JD9999
                //Though it could also be given for other errors
                if($e->getStatusCode() == 500)
                {
                    echo 'Room not found';
                }
                else
                {
                    //Something else went wrong, can expand checks for other common errors if waldo gives them
                    throw $e;
                }
            }
        }
        ?>
    @endforeach

</body>
</html>