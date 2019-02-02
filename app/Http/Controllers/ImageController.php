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
        $this->middleware('auth');
    }


    public function index()
    {
        return view('pages.image');
    }

    public function store(Request $request)
    {
        $room = $request->input('room');

        return redirect()->route('room-image', ['room' => $room]);

    }

    public function imageAPI($room){

        return view('pages.room-image')->with('room',$room);

    }


}