<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageCsunUserController extends Controller
{
    public function __construct()
    {
          $this->middleware('auth');
    }


    public function index()
    {
        return view('pages.userImage');
    }

    public function userstore(Request $request)
    {
        $room = $request->input('room');

        return redirect()->route('csun_user_image_room', ['room' => $room]);

    }

    //Create a helper imageAPI function so that we can pass it through to the 3D image function. The problem
    //was that /image was being used by multiple functions, so laravel didn't know which function to service first

    //returns 3D images of a specific classroom

    public function interactiveImages($room){
        $classroom = $room; //stores classroom. Ex: JD2216
        $building = substr($classroom,0,2);  //stores building of classroom. Ex: JD
        $roomNumber = substr($classroom,2);  //stores room number. Ex: 2216

        return view('pages.csun_user_image_room',['classroom'=>$classroom, 'building'=>$building,'roomNumber'=>$roomNumber]);

    }

    //returns 3D images of a specific classroom
}
