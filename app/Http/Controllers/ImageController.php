<?php
/**
 * Created by PhpStorm.
 * User: nikitha
 * Date: 12/10/2018
 * Time: 10:09 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ImageController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
      //  $this->middleware('auth');
    }


    public function index()
    {
        $data= Equipment::all();
        return view('pages.image')->with('data',$data);;
    }

    public function store(Request $request)
    {
        $room = $request->input('room');

        return redirect()->route('image-room', ['room' => $room]);

    }

    //Create a helper imageAPI function so that we can pass it through to the 3D image function. The problem
    //was that /image was being used by multiple functions, so laravel didn't know which function to service first

    //returns 3D images of a specific classroom

    public function interactiveImages($room){
        $classroom = $room; //stores classroom. Ex: JD2216
        $building = substr($classroom,0,2);  //stores building of classroom. Ex: JD
        $roomNumber = substr($classroom,2);  //stores room number. Ex: 2216

        return view('pages.image-room',['classroom'=>$classroom, 'building'=>$building,'roomNumber'=>$roomNumber]);

    }

    //returns 3D images of a specific classroom



}