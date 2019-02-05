<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapsController extends Controller
{
    //Takes a passed query of which room to check for
    public function map()
    {
        return view('map', [
            'rooms' =>
            [
                request('room')
            ],
            'connected' => false
        ]);
    }

    //To test a set of rooms at once, including META+LAB, the unusual case
    public function mapTest()
    {
        return view('map', [
            'rooms' =>
            [
                'JD2213',
                'LO1322',
                'JD1600A',
                'META+LAB'
            ],
            'connected' => true
        ]);
    }

    //Draws the route between a collection of rooms, in the order given
    public function mapRoute()
    {
        //seperates the rooms on commas
        $rooms = explode(',', request('rooms'));
        return view('map', [
            'rooms' => $rooms,
            'connected' => true
        ]);
    }
}
