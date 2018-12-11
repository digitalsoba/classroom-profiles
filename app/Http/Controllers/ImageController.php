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


}