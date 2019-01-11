<?php
/**
 * Created by PhpStorm.
 * User: nikitha
 * Date: 12/10/2018
 * Time: 10:09 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ImageController{

    public function store(Request $request)
    {
        $room = $request->input('room');

        return redirect()->route('room-image', ['room' => $room]);

    }

    public function imageAPI(){
        $search = 'forest';
        $page = 3;
        $per_page = 15;
        $orientation = 'landscape';

        Crew\Unsplash\Search::photos($search, $page, $per_page, $orientation);

    }

    //returns 3D images of a specific classroom
    public function interactiveImages($classroom){

        //needs the panomora photo, the script is what makes tha photo interactive. Can still use the direct link to
        //the 3D website

        $room = $classroom; //
        $building = substr($room,0,2);
        $roomNumber = substr($room,2);
        return view('image',compact('room','building','roomNumber'));

}


}