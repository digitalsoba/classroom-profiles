<?php
/**
 * Created by PhpStorm.
 * User: nikitha
 * Date: 12/10/2018
 * Time: 10:09 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ImageController {

    public function store(Request $request)
    {
        $room = $request->input('room');

        return redirect()->route('room-image', ['room' => $room]);

    }

    public function imageAPI($room){


//        $postData = array(
//            'search' => $room,
//            'page' => '3',
//            'per_page' => '15',
//            'orientation' => 'landscape',
//
//        );
//        // Create the context for the request
//        $context = stream_context_create(array(
//            'http' => array(
//                // http://www.php.net/manual/en/context.http.php
//                'method' => 'POST',
//                'header' => "Content-Type: application/json\r\n",
//                'content' => json_encode($postData)
//            )
//        ));
//        // Send the request
//        $response = file_get_contents('https://api.unsplash.com/', FALSE, $context);
//        // Check for errors
//        if ($response === FALSE) {
//            die('Error');
//        }
//        // Decode the response
//        //$responseData = json_decode($response, TRUE);
//
//        return $response;

        return "This will show pictures of the room: ". $room;

    }


}