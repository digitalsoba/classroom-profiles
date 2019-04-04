<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;

class WelcomeController extends Controller
{
    public function index()
    {
        $data= Equipment::all();
        return view('welcome')->with('data',$data);
    }
}
