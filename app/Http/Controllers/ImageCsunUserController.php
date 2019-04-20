<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class ImageCsunUserController extends Controller
{
    public function __construct()
    {
          $this->middleware('auth');
    }


    public function index()
    {
        $data= Equipment::all();
        return view('pages.userImage')->with('data',$data);
    }

    public function userstore(Request $request)
    {
        $room = $request->input('room');

        //return view('pages.csunIndex')->with('data',$data);

        return redirect()->route('csun_user_image_room', ['room' => $room, 'data'=>$data]);

    }

    //Create a helper imageAPI function so that we can pass it through to the 3D image function. The problem
    //was that /image was being used by multiple functions, so laravel didn't know which function to service first

    //returns 3D images of a specific classroom

    public function interactiveImages($room){
        $classroom = $room; //stores classroom. Ex: JD2216
        $building = substr($classroom,0,2);  //stores building of classroom. Ex: JD
        $roomNumber = substr($classroom,2);  //stores room number. Ex: 2216
        $data= ['roomData'=>Equipment::find($room),
            'mainData'=>Equipment::all()];

        return view('pages.csun_user_image_room',['classroom'=>$classroom, 'building'=>$building,'roomNumber'=>$roomNumber,
                                                        'data'=>$data]);

    }

    //returns 3D images of a specific classroom
}
